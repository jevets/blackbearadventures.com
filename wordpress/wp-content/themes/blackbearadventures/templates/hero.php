<?php 
global $post;
$path = get_stylesheet_directory().'/assets/img/hero';

// Do nothing on home page
if (is_front_page()) return;

$slug = $post->post_name;

if (file_exists(trailingslashit($path).$slug.'.jpg')): ?>

  <div class="hero hero-default hero-<?php echo $slug ?>">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <div class="hero-text">
            <h1><?php the_title() ?></h1>
          </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8">
          <div class="hero-img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/hero/<?php echo $slug ?>.jpg" alt="<?php the_title_attribute() ?>" class="img-responsive">
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>