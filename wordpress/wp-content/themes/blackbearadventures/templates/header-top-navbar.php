<!-- top stripe -->
<div class="navbar-top navbar-inverse">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 hidden-xs">
        <?php
          if (has_nav_menu('header_navigation')) :
            wp_nav_menu(array(
              'theme_location' => 'header_navigation',
              'menu_class' => 'list-inline',
              'container' => false,
              'menu_id' => 'header_menu',
              'depth' => 1,
              'fallback_cb' => false,
            ));
          endif;
        ?>
      </div>
      <div class="col-sm-6 col-xs-12">
        <p class="text-right hidden-print"><a href="/contact/"><span class="glyphicon glyphicon-question-sign"></span> Questions?</a> &nbsp; <a href="tel:+18883398687"><span class="glyphicon glyphicon-earphone"></span> (888) 339-8687</a></p>
        <p class="visible-print">Black Bear Adventures - Bicycle Tours</p>
        <p class="visible-print"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-print.png" alt=""></p>
        <p class="visible-print"><span class="glyphicon glyphicon-question-sign"></span> Questions? <span class="glyphicon glyphicon-earphone"></span> (888) 339-8687</p>
      </div>
    </div>
  </div>
</div>
<!-- end top stripe -->

<div class="masthead">
  <div class="container">
    <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo1.png" alt="Black Bear Adventures - Bicycle Tours for Avid Cyclists"></a>
  </div>
</div>

<header class="banner navbar navbar-default pavement" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array(
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav navbar-nav',
            'depth' => 0,
            'fallback_cb' => false,
          ));
        endif;
      ?>
    </nav>
  </div>
</header>