<?php $loop = new WP_Query( array( 'post_type' => 'cocktail', 'posts_per_page' => -1 ) ); ?>

<?php if( have_posts() ): ?>
  <section id="cocktails"> 
    <div class="container">
      <div id="recipes" class="row">
        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
          <div id="cocktail-slider">

              <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php if ( has_post_thumbnail() ) : ?>

                  <div class="slick-slide" data-cocktail="<?php echo $post->post_name; ?>">
                    <a href="#" class="cocktail-img-link" title="<?php the_title(); ?>">
                      <?php the_post_thumbnail('300h', array('class' => 'img-responsive')); ?>
                    </a>
                  </div>

                <?php endif; ?>
              <?php endwhile; wp_reset_query(); ?>
            
          </div>
        </div>      
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-12">
          <div id="recipe-slider" class="slick-slider">
            <?php $loop = new WP_Query( array( 'post_type' => 'cocktail', 'posts_per_page' => -1 ) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <?php if ( has_post_thumbnail() ) : ?>

                <div class="recipe-slide slick-slide" data-recipe="<?php echo $post->post_name; ?>">
                  <div class="recipe-display">
                    <div class="recipe-display-inner">
                      <div class="recipe-display-content-wrap">
                        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '300h' );
                            $url = $thumb['0']; ?>
                        <img src="<?php echo $url; ?>" class="recipe-image">
                        <h3 class="recipe-title"><?php the_title(); ?></h3>
                        <div class="recipe-directions">
                          <?php the_content(); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php endif; ?>
            <?php endwhile; wp_reset_query(); ?>

          <?php if(false): ?>
            <!-- Shiner -->
            <div class="recipe-slide slick-slide" data-recipe="shiner">
              <div class="recipe-display">
                <div class="recipe-display-inner">
                  <div class="recipe-display-content-wrap">
                    <img class="recipe-image" src="<?php echo sh_get_theme_asset('/images/recipes_fixed/OM_Shiner_BLK300px.jpg'); ?>">
                    <h3 class="recipe-title">The Shiner</h3>
                    <ul class="recipe-ingredients">
                      <li>1&frac12; oz stillhouse® original moonshine.</li>
                      <li>Twist of lime</li>
                    </ul>
                    <p>Method: Bruise It.  Pour over fresh ice into an old-fashioned glass and top with a twist of lime.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Old Fashioned -->
            <div class="recipe-slide slick-slide" data-recipe="oldfashioned">
              <div class="recipe-display">
                <div class="recipe-display-inner">
                  <div class="recipe-display-content-wrap">
                    <img class="recipe-image" src="<?php echo sh_get_theme_asset('/images/recipes_fixed/OM_Old_Fashioned_BLK300px.jpg'); ?>">
                    <h3 class="recipe-title">STILLHOUSE&reg; Old Fashioned</h3>
                    <ul class="recipe-ingredients">
                      <li>2 oz STILLHOUSE&reg; Original Moonshine</li>
                      <li>1 white sugar cube.</li>
                      <li>5 dashes of Angostura Bitters</li>
                    </ul>
                    <p>Build over ice in an old-fashioned glass and stir.  Garnish with orange and lemon peel.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Moonhattan -->
            <div class="recipe-slide slick-slide" data-recipe="moonhattan">
              <div class="recipe-display">
                <div class="recipe-display-inner">
                  <div class="recipe-display-content-wrap">
                    <img class="recipe-image" src="<?php echo sh_get_theme_asset('/images/recipes_fixed/OM_Clear_Moonhatten_BLK_300px.jpg'); ?>">
                    <h3 class="recipe-title">STILLHOUSE&reg; Moonhattan</h3>
                    <ul class="recipe-ingredients">
                      <li>2 oz STILLHOUSE&reg; Original Moonshine</li>
                      <li>1 oz Sweet vermouth</li>
                      <li>1 dash Angostura bitters</li>
                      <li>1 dash Regan's Orange bitters</li>
                      <li>1 marinated cherry (or a maraschino cherry, if you must) </li>
                    </ul>
                    <p>
                      Add the sweet vermouth, the bitters and STILLHOUSE® Original Moonshine to a mixing glass with ice.  Stir in a circular fashion for thirty seconds, and strain into a chilled cocktail glass. Garnish with the marinated cherry and enjoy.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Moonshine Mary -->
            <div class="recipe-slide slick-slide" data-recipe="bloody">
              <div class="recipe-display">
                <div class="recipe-display-inner">
                  <div class="recipe-display-content-wrap">
                    <img class="recipe-image" src="<?php echo sh_get_theme_asset('/images/recipes_fixed/OM_Bloody_Shine_BLK_300Pixels.jpg'); ?>">
                    <h3 class="recipe-title">STILLHOUSE&reg; Moonshine Mary</h3>
                    <ul class="recipe-ingredients">
                      <li>2 oz STILLHOUSE&reg; Original Moonshine</li>
                      <li>3 oz tomato juice</li>
                      <li>1 tbsp lemon juice</li>
                      <li>Salt &amp; pepper to taste</li>
                      <li>3 dashes Worcestershire sauce</li>
                      <li>2 drops Tabasco</li>
                    </ul>
                    <p>
                      Put all ingredients into a cocktail shaker, combine ingredients over ice and shake until cold. Strain into a martini glass.  Garnish with lemon wedge, celery stalk, or green olives.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Peach Tea Punch -->
            <div class="recipe-slide slick-slide" data-recipe="tea">
              <div class="recipe-display">
                <div class="recipe-display-inner">
                  <div class="recipe-display-content-wrap">
                    <img class="recipe-image" src="<?php echo sh_get_theme_asset('/images/recipes_fixed/OM_Shine_Tea_BLK300px.jpg'); ?>">
                    <h3 class="recipe-title">Peach Don’t Kill My Vibe</h3>
                    <ul class="recipe-ingredients">
                      <li>1 750 ml bottle of STILLHOUSE® Peach Tea Moonshine</li>
                      <li>1 750 ml Measure of Lemonade (not too sweet - - simple lemonade and add water)</li>
                      <li>4 large peaches diced</li>
                      <li>3 lemons sliced as a wheel</li>
                    </ul>
                    <p>
                      Simply add all ingredients over 3 cups of ice in a large punch bowl.  Pour liquid and some fruit over ice in a punch cup.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Ginger Kid -->
            <div class="recipe-slide slick-slide" data-recipe="ginger">
              <div class="recipe-display">
                <div class="recipe-display-inner">
                  <div class="recipe-display-content-wrap">
                    <img class="recipe-image" src="<?php echo sh_get_theme_asset('/images/recipes_fixed/OM_Ginger_Shine_BLK300px.jpg'); ?>">
                    <h3 class="recipe-title">The Ginger Kid</h3>
                    <ul class="recipe-ingredients">
                      <li>2 oz STILLHOUSE Apple Crisp Moonshine</li>
                      <li>4 oz Ginger Beer</li>
                    </ul>
                    <p>Pour over ice in a highball glass and stir.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Escape -->
            <div class="recipe-slide slick-slide" data-recipe="velvet">
              <div class="recipe-display">
                <div class="recipe-display-inner">
                  <div class="recipe-display-content-wrap">
                    <img class="recipe-image" src="<?php echo sh_get_theme_asset('/images/recipes_fixed/OM_Velvet_Shine_BLK300px.jpg'); ?>">
                    <h3 class="recipe-title">Escape</h3>
                    <ul class="recipe-ingredients">
                      <li>2 oz STILLHOUSE Coconut Moonshine</li>
                      <li>1 oz Coconut Cream</li>
                      <li>1&frac12; oz fresh pineapple juice</li>
                      <li>Fresh Pineapple wedges</li>
                    </ul>
                    <p>
                      Fill a shaker with ice cubes. Add STILLHOUSE Coconut Moonshine and coconut cream. Shake vigorously and strain into a chilled highball glass filled with ice cubes. Top off with pineapple juice. Garnish with fresh pineapple.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Hot Toddy -->
            <div class="recipe-slide slick-slide" data-recipe="hottoddy">
              <div class="recipe-display">
                <div class="recipe-display-inner">
                  <div class="recipe-display-content-wrap">
                    <img class="recipe-image" src="<?php echo sh_get_theme_asset('/images/recipes_fixed/OM_Hot_Toddy_300px.jpg'); ?>">
                    <h3 class="recipe-title">STILLHOUSE&reg; Red Hot Toddy</h3>
                    <ul class="recipe-ingredients">
                      <li>2 oz Hot Tea</li>
                      <li>1 oz STILLHOUSE Red Hot Moonshine</li>
                      <li>&frac34; oz fresh lemon juice</li>
                      <li>&frac34; oz fresh natural honey</li>
                    </ul>
                    <p>
                      Pour honey into a teacup first.  Then add fresh brewed hot tea.  Lastly mix in STILLHOUSE Red Hot Moonshine and stir with a teaspoon while adding lemon to taste.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Sidecar -->
            <div class="recipe-slide slick-slide" data-recipe="sidecar">
              <div class="recipe-display">
                <div class="recipe-display-inner">
                  <div class="recipe-display-content-wrap">
                    <img class="recipe-image" src="<?php echo sh_get_theme_asset('/images/recipes_fixed/OM_Sidecar_300Px.jpg'); ?>">
                    <h3 class="recipe-title">STILLHOUSE&reg; Apple Crisp Sidecar</h3>
                    <ul class="recipe-ingredients">
                      <li>2 oz STILLHOUSE Apple Crisp Moonshine</li>
                      <li>&frac12; oz Cointreau or Triple sec</li>
                      <li>&frac12; oz Fresh lemon juice</li>
                      <li>1 lemon wedge</li>
                    </ul>
                    <p>
                      Fill a cocktail shaker 3/4 full with ice cubes. Pour in lemon juice, Cointreau, and brandy. Cover and shake vigorously for about 30 seconds, strain into a martini glass and garnish with a wedge of lemon.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>