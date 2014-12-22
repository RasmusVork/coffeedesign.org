<?php get_header(); ?>

<section class="layout-content-wrapper">
  <div class="layout-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php include "partials/event.php"; ?>
    <?php endwhile; endif; ?>
  </div>
</div>
  
<?php get_footer(); ?>