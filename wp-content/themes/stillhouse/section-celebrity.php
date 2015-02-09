<?php 

    $query = new WP_Query( array(
        'post_type' => 'celebrity',
        'posts_per_page' => -1
    ));


    if($query->have_posts()): ?>


      <section id="celebrity" class="section-topstripe">
        <div class="container">
          <div class="row">
            <h4 class="section-subtitle">
              Celebrity Spotlight
            </h4>

            <div class="col-xs-10 col-xs-offset-1">
              <div id="celebrity-slider" class="slick-slider">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                  <?php if(has_post_thumbnail()):?>
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '800h' ); $fs_url = $thumb[0]; ?>

                    <div class="slick-slide">
                      <div class="thumbnail">
                        <a href="<?php echo $fs_url ?>" class="fancy-link" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" target="_blank">
                          <?php the_post_thumbnail('400h'); ?>
                        </a>
                        <div class="caption">
                          <?php the_title(); ?>
                        </div>
                      </div>
                    </div>

                  <?php endif; ?>
                <?php endwhile; ?>
              </div>
            </div>

          </div>
        </div>
      </section>

    <?php endif; 

?>
