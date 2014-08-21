<?php get_header(); ?>
  
<section class="layout-content-wrapper sub-background">
  <div class="layout-content sub-wide nest-1">
    <h2>Contest</h2>
    <?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
  </div>
</section>
<hr/>
<section class="layout-content-wrapper sub-background">
  <div class="layout-content sub-wide nest-1">
    <?php query_posts(array ( 'category_name' => 'contestants', 'order' => 'ASC' )); ?>
    <div class="grid wrapped spaced">
      <div class="grid-items">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
          <?php include "partials/contestant.php"; ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>