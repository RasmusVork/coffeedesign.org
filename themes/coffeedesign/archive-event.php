<?php get_header(); ?>
  
<?php query_posts(array ( 'post_type' => 'event', 'posts_per_page' => 2, 'post_status' => 'future', 'order' => 'ASC' )); ?>
<?php if (have_posts()) : ?>
<section class="layout-content-wrapper sub-background">
  <div class="layout-content sub-wide">
    <h2>Upcoming Events</h2>
    <hr>
    <div class="layout-events">
      <?php while (have_posts()) : the_post(); ?>
      <?php include "partials/event.php"; ?>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php
query_posts(array (
  'post_type' => 'event',
  'order' => 'DSC',
  'posts_per_page' => 4,
  'paged'=>$paged,
)); ?>
<section class="layout-content-wrapper">
  <div class="layout-content">
    <h2>Past Events</h2>
    <hr>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php include "partials/event.php"; ?>
    <?php endwhile; endif; ?>
    <div class="pagination-wrap">
      <div class="pagination">
        <div class="pagination-link sub-newer"><?php previous_posts_link("
            <div class='button sub-outline'>
              <div class='icon'>
                <div class='icon-glyph sub-arrow-left'></div>
                <div class='icon-text'>Newer Events</div>
              </div>
            </div>
          "); ?></div>
        <div class="pagination-link sub-older">
          <?php next_posts_link("
            <div class='button sub-outline'>
              <div class='icon'>
                <div class='icon-text'>Older Events</div>
                <div class='icon-glyph sub-arrow-right'></div>
              </div>
            </div>
          "); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>