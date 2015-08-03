<?php
$post_date  = get_the_date('c');
$today      = current_time( 'c' );
$post_month = get_the_date('Y-m');
$this_month = date('Y-m');
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'large', true);
?>

<?php if(is_single()) : ?>
  <small><a class="button sub-outline sub-back" href="<?php print $_SERVER['HTTP_REFERER'];?>">⬅ Events</a></small>
<?php endif; ?>

<div class="event <?php echo (is_archive() && $post_date >= $today && $wp_query->current_post == 0 ? "sub-next" : ""); ?>">

  <div class="event-content">
    <?php if($post_date >= $today && $wp_query->current_post == 0 ) : ?>

      <div class="event-ribbon">
        <div class="ribbon">
          <div class="ribbon-shadow"></div>
          <div class="ribbon-text"><?php echo ($post_month == $this_month ? 'This Month' : 'Up next'); ?></div>
        </div>
      </div>

    <?php endif; ?>
    <div class="event-content-grid">
      <?php if($post_date <= $today || $wp_query->current_post == 0) : if(has_post_thumbnail()) : ?>
      <div class="event-content-photo">
        <div style="background-image: url('<?php echo $image_url[0]; ?>')" class="photo sub-circle">
          <?php the_post_thumbnail(); ?>
        </div>
      </div>
      <?php endif; endif;?>
      <div class="event-content-info">

          <?php if(! is_single()) : ?>
            <h3 class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php else : ?>
            <h2><?php the_title(); ?></h2>
          <?php endif; ?>

        <p class="event-date">
          <strong><?php the_date('l, F j, Y'); ?></strong><br>
          <?php if(get_field(location_name)) : ?>
            <a class="event-date-location event-date-location" href="http://maps.apple.com/?q=<?php the_field('location_url', $term); ?>">
              <?php the_field('location_name', $term); ?>
            </a>
          <?php endif; ?>
        </p>
        <?php ( is_archive() ? the_excerpt() : the_content() ); ?>
        <?php if(get_field("registration_link") && $post_date >= $today) : ?>
          <p>
            <a href="<?php the_field('registration_link', $term); ?>" class="button">Register</a>
          </p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
