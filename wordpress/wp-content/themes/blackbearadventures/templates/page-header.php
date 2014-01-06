<?php 
global $post;
if (isset($post->has_hero) && $post->has_hero) return;
?>
<div class="page-header">
  <h1>
    <?php echo roots_title(); ?>
  </h1>
</div>
