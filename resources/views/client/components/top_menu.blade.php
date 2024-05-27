<div class="top-btn btn row-group">
    <i class="xi-arrow-up"></i>
</div>

<script>
    $('.top-btn').click(function(){
        $('html').scrollTop(0);
    });

    $(document).scroll(function(){
        if ( $(document).scrollTop() > 88 ) {
            $('#top_menu').addClass('active');
        } else {
            $('#top_menu').removeClass('active');
        }
    });
</script>