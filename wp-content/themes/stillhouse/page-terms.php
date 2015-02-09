<?php 

get_header();

if ( have_posts() ) {
  while ( have_posts() ){ ?>

  <?php the_post(); ?>

  <div class="container">
    <div class"row">
      <div class="col-md-6 col-md-offset-3">
        <img src="<?php echo sh_get_theme_asset('/images/logo-600.png'); ?>" style="width:300px; display:block; margin: 50px auto 30px;">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

<?php 
  }
}

get_footer(); 

?>