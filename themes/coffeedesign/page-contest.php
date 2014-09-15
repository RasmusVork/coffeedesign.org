<?php get_header(); ?>

<section class="layout-content-wrapper sub-background">
  <div class="layout-content sub-narrow sub-align_left sub-wide nest-2">
    <div class="align-center">
      <h2>Screen Printing Contest</h2>
      <hr>
      <h3>Cast your vote!</h3>
      <hr>
      <p>The top two winning designs will be screen printed at our <a href='http://kc.coffeedesign.org/events/hands-on-screen-printing-letterpress/'>next event</a>.
    </div>
  </div>
</section>
<section class="layout-content-wrapper">
  <div class="layout-content sub-wide sub-align_left nest-2">
    <?php query_posts(array ( 'category_name' => 'contestants', 'order' => 'ASC', 'posts_per_page' => '50' )); ?>
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