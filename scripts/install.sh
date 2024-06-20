#!/bin/bash

set -e

MYSQL_ROOT_PASSWORD=$1

# Update and install necessary packages
is_installed() {
    dpkg -l | grep -q "$1"
}

install_packages() {
    sudo dpkg --configure -a
    sudo apt-get clean
    sudo apt-get update
    sudo apt-get upgrade

    # 필요한 패키지 목록
    packages=(
        git
        unzip
        nginx
        php-fpm
        php-mysql
        php-mbstring
        php-xml
        php-bcmath
        php-json
        php-zip
        php-curl
        mariadb-server
        mariadb-client
        software-properties-common
        ca-certificates
        vsftpd
        certbot
        python3-certbot-nginx
        phpmyadmin
    )

    for package in "${packages[@]}"; do
        if ! is_installed "$package"; then
            sudo apt-get --assume-yes install "$package"
        fi
    done

    # 변경 사항 반영을 위해 systemd 데몬 재로드
    sudo systemctl daemon-reload
}

# Secure MySQL installation
secure_mysql_installation() {
    sudo chown -R mysql:mysql /var/lib/mysql
    sudo chmod -R 755 /var/lib/mysql
    sudo chmod -R 644 /var/lib/mysql/*

    # MySQL root 비밀번호 설정 및 보안 설정
    sudo mysql -u root -p"${MYSQL_ROOT_PASSWORD}" -S /var/run/mysqld/mysqld.sock <<-EOF
ALTER USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}';
DROP USER IF EXISTS 'root'@'localhost';
CREATE USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}';
GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
EOF

    sudo systemctl restart mysql
}

# Configure VSFTPD
configure_vsftpd() {
    if [ ! -f /etc/vsftpd.conf ] || ! grep -q "listen_port=2121" /etc/vsftpd.conf; then
    sudo tee /etc/vsftpd.conf > /dev/null <<EOL
listen=YES
listen_ipv6=NO
anonymous_enable=NO
local_enable=YES
write_enable=YES
local_umask=022
dirmessage_enable=YES
use_localtime=YES
chroot_local_user=YES
pasv_enable=YES
pasv_min_port=10090
pasv_max_port=10100
allow_writeable_chroot=YES
listen_port=2121
port_enable=YES
connect_from_port_20=NO
local_max_rate=0
secure_chroot_dir=/var/run/vsftpd/empty
pam_service_name=vsftpd
rsa_cert_file=/etc/ssl/certs/ssl-cert-snakeoil.pem
rsa_private_key_file=/etc/ssl/private/ssl-cert-snakeoil.key
ssl_enable=NO
EOL
    sudo systemctl restart vsftpd
    fi
}

# Configure firewall
configure_firewall() {
    sudo ufw allow OpenSSH
    sudo ufw allow mysql
    sudo ufw allow 80/tcp
    sudo ufw allow 443/tcp
    sudo ufw allow 2121/tcp
    sudo ufw allow 20:21/tcp
    sudo ufw allow 30000:31000/tcp
    sudo ufw --force enable
}

# Install SSL certificate with Certbot
install_ssl_cert() {
    if ! sudo certbot certificates | grep -q "baekjinyoung.co.kr"; then
        sudo certbot --nginx -d baekjinyoung.co.kr -n --agree-tos --email time121412@gmail.com || true
        sudo systemctl enable certbot.timer
        sudo systemctl start certbot.timer
    fi
}

# Configure PHP and Nginx
configure_php_nginx() {
    # Find PHP version (assuming PHP-FPM is installed)
    PHP_VERSION=$(php -v | head -n 1 | cut -d " " -f 2 | cut -d "." -f 1,2)

    # Configure PHP-FPM
    sudo sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php/${PHP_VERSION}/fpm/php.ini
    sudo systemctl restart php${PHP_VERSION}-fpm

    # Configure Nginx
    NGINX_CONF="/etc/nginx/sites-available/default"
    if [ ! -f "$NGINX_CONF" ]; then
        sudo tee $NGINX_CONF > /dev/null <<EOL
server {
    listen 80 default_server;
    listen [::]:80 default_server;
    root /home/ubuntu/laravel/public;
    index index.php index.html index.htm index.nginx-debian.html;
    server_name baekjinyoung.co.kr;

    location / {
        try_files \$uri \$uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php${PHP_VERSION}-fpm.sock;
    }

    location ~ /\.ht {
        deny all;
    }
}
EOL
    fi

    # symbolic link
    if [ ! -e "/etc/nginx/sites-enabled/default" ]; then
        sudo ln -sf /etc/nginx/sites-available/default /etc/nginx/sites-enabled/
    fi

    sudo systemctl restart nginx
}

# Main function to execute all configuration steps
main() {
    install_packages
    secure_mysql_installation
    configure_vsftpd
    configure_firewall
    install_ssl_cert
    configure_php_nginx
}

# Execute main function
main


