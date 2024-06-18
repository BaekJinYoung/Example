#!/bin/bash

set -e

# Prompt for MySQL root password (not stored in script)
read -s -p "Enter MySQL root password: " MYSQL_ROOT_PASSWORD
echo

# Update and install necessary packages
sudo apt-get update
sudo apt-get install -y git unzip nginx php-fpm php-mysql php-mbstring php-xml php-bcmath php-json php-zip php-curl mariadb-server mariadb-client software-properties-common ca-certificates vsftpd certbot python3-certbot-nginx phpmyadmin

# Secure MySQL installation
secure_mysql_installation() {
    sudo mysql_secure_installation <<EOF
y
${MYSQL_ROOT_PASSWORD}
${MYSQL_ROOT_PASSWORD}
y
y
y
y
EOF
    sudo systemctl restart mysql
}

# Configure VSFTPD
configure_vsftpd() {
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
}

# Configure firewall
configure_firewall() {
    sudo ufw allow OpenSSH
    sudo ufw allow mysql
    sudo ufw allow 2121/tcp
    sudo ufw allow 20:21/tcp
    sudo ufw allow 30000:31000/tcp
    sudo ufw --force enable
}

# Install SSL certificate with Certbot
install_ssl_cert() {
    # domain
    sudo certbot --nginx -d baekjinyoung.co.kr
    sudo systemctl enable certbot.timer
    sudo systemctl start certbot.timer
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
    sudo tee $NGINX_CONF > /dev/null <<EOL
server {
    listen 80 default_server;
    listen [::]:80 default_server;
    root /var/www/html;
    index index.php index.html index.htm index.nginx-debian.html;
    server_name baekjinyoung.co.kr;

    location / {
        try_files \$uri \$uri/ =404;
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

    # symbolic link
    sudo ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/
    sudo systemctl restart nginx
}

# Main function to execute all configuration steps
main() {
    secure_mysql_installation
    configure_vsftpd
    configure_firewall
    install_ssl_cert
    configure_php_nginx
}

# Execute main function
main