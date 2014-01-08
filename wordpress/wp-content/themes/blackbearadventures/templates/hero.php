<?php 
global $post;
$path = get_stylesheet_directory().'/assets/img/hero';

// Do nothing on home page
if (is_front_page()) return;

$slug = $post->post_name;

if (file_exists(trailingslashit($path).$slug.'.jpg')): 

$post->has_hero = true;

?>

  <div class="hero hero-default hero-<?php echo $slug ?>">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="hero-img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/hero/<?php echo $slug ?>.jpg" alt="<?php the_title_attribute() ?>" class="img-responsive">
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>