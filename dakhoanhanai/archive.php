<?php get_header(); ?>

<main id="content" role="main">
    <div class="breadcrum-cus">
        <div class="container">
          <?php custom_breadcrumbs()?>
      </div>
  </div>
  <div class="clear"></div>
  <div class="container mb-5">
    <div class="row">
        <div class="col-lg-8">

            <?php if ( have_posts() ) : ?>

                <?php
                    // Start the Loop.
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <div class="row cus-post">
                      <!--   <div class="col-lg-4">
                            <a href="<?php the_permalink() ?>" title="<?php the_title()?>">
                                <?php echo the_post_thumbnail('medium', array('class' => 'w-100 h-auto', 'alt' => get_the_title())) ?>
                            </a>
                        </div> -->
                        <div class="col-lg-8">
                            <h3 class=" mt-0 font-size-14"><a class=" color-title-stt text-uppercase font-weight-bold"  href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_title()?></a></h3>
                            <p class=" d-lg-block d-md-none d-sm-block"><?php echo wp_trim_words(strip_tags(get_the_content()),20,'...')?></p>
                            <div class="text-left"><a href="<?php echo get_the_permalink() ?>" title="<?php the_title()?>" class="clickReadMore">Xem thêm</a> </div>
                        </div>
                    </div>
                    
                    <?php
                        // End the loop.
                endwhile;

                wpbeginner_numeric_posts_nav();
                    // If no content, include the "No posts found" template.
            else :
                get_template_part('content-none');
            endif;
            ?>
        </div>

        <div class="col-lg-4">
            <?php get_sidebar()?>
        </div>
    </div>
</div>
</main>

<?php get_footer();?>

