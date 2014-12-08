<?php get_header(); ?>

<section class="layout-content-wrapper sub-background sub-christmas-list">
  <div class="layout-content nest-2">
    <div class="align-center">
      <h1>A Very Designer Wish List</h1>
      <p class="sub_heading">Our highly refined list of great things to buy the designer in your life, all for under $1,000,000.</p>
    </div>
  </div>
</section>
<section class="layout-content-wrapper">
  <div class="layout-content sub-wide sub-align_left nest-2">
    <?php query_posts(array ( 'post_type' => 'christmas_list', 'order' => 'ASC', 'posts_per_page' => '50' )); ?>
    <div class="grid wrapped spaced">
      <div class="grid-items">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
          <?php include "partials/christmas-list-item.php"; ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>