<?php get_header(); ?>
  
<section class="layout-content-wrapper sub-background">
  <div class="layout-content sub-wide">
    <h2>Upcoming Events</h2>
    <hr>
    <div class="layout-events">
      <?php query_posts(array ( 'post_type' => 'event', 'posts_per_page' => 2, 'post_status' => 'future', 'order' => 'ASC' ));
      include "partials/event.php"; ?>
    </div>
  </div>
</section>
<section class="layout-content-wrapper">
  <div class="layout-content">
    <h2>Past Events</h2>
    <hr>
    <?php query_posts(array ( 'post_type' => 'event', 'order' => 'DSC' ));
    include "partials/event.php"; ?>
  </div>
</section>

<?php get_footer(); ?>