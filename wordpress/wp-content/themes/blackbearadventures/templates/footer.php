<footer>
  <div class="container">
    <div class="row text-center">
      <div class="col-xs-12">
      <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(array(
            'theme_location' => 'footer_navigation',
            'menu_class' => 'list-inline',
            'menu_id' => 'footer_menu',
            'container' => false,
            'depth' => 1,
            'fallback_cb' => false,
          ));
        endif;
      ?>
      </div>
      <div class="col-xs-12">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
        <p>Site by <a href="http://groovywebdesign.com/" title="Professional-Grade Web Design &amp; Development"><img src="/media/teethb.png" alt="Groovy Web Design" width="16"> Groovy Web Design</a></p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>