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
        <p class="text-right hidden-print"><a href="/contact/"><span class="glyphicon glyphicon-question-sign"></span> Questions?</a> &nbsp; <a href="tel:18883398687"><span class="glyphicon glyphicon-earphone"></span> (888) 339-8687</a></p>
        <p class="visible-print">Black Bear Adventures - Bicycle Tours</p>
        <p class="visible-print"><img src="/media/logo-print.png"></p>
        <p class="visible-print"><span class="glyphicon glyphicon-question-sign"></span> Questions?</a> &nbsp; <span class="glyphicon glyphicon-earphone"></span> (888) 339-8687</p>
      </div>
    </div>
  </div>
</div>
<!-- end top stripe -->


<header class="banner navbar navbar-default" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="/media/logo.png" width="200" alt="Black Bear Adventures - Bicycle Tours for Avid Cyclists"></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
