<?php get_header(); ?>
<div class="breadcrum-cus">
    <div class="container">
        <?php custom_breadcrumbs()?>
    </div>
</div>
<?php setPostViews(get_the_ID())?>
<div class="container ">
    <div class="row mt-5">
        <div class="col-md-8">
            <a href="<?php echo LIVE_CHAT;?>" rel="noopener noreferrer" target="_blank" class="tu-van-ads">
                <?php if(lighthouse()):?>
                    <!-- <img src="<?php echo get_template_directory_uri()?>/assets/images/top-content.gif" class="w-100 img-fluid" alt="banner bác sĩ hẹn khám"> -->
                <?php endif;?>
            </a>
            <div class="main-content">
                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'content' );
                endwhile; // End of the loop.
                ?>
            </div>
        </div>
        <div class="col-md-4">
            <?php get_sidebar()?>
        </div>
    </div>
</div>
<script>

    $('img').error(function() {
        // $(this).attr('src', '<?php echo get_template_directory_uri();?>/assets/images/pk-nhan-ai.jpg').addClass('no-img');
        $(this).hide();
        
    });

</script>
<?php get_footer();?>