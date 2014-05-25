<?php if (have_posts()) : while (have_posts()) : the_post();
  $post_month = get_the_date('m');
  $this_month = date('m');
  if($post_month == $this_month) : ?>
    <div class="event sub-primary">
      <div class="event-ribbon">
        <div class="ribbon">
          <div class="ribbon-text">This Month</div>
        </div>
      </div>
    <?php else : ?>
      <div class="event sub-secondary">
  <?php endif; ?>

  <div class="event-content">
    <div class="event-content-photo">
      <div style="background-image: url('<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ); ?>')" class="photo sub-circle">
        <?php the_post_thumbnail(); ?>
      </div>
    </div>
    <div class="event-content-info">
      <h3 class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php the_excerpt(); ?>
      <hr class="sub-small"/>
      <p class="event-date">
        <strong><?php the_date('l, F j, Y'); ?></strong><br>
        <?php if(get_field(location_name)) : ?>
          <a href="http://maps.apple.com/?q=<?php the_field('location_url', $term); ?>">
            <?php the_field('location_name', $term); ?>
          </a>
        <?php endif; ?>
      </p>
      <?php if(get_field("registration_link")) : ?>
        <p>
          <a href="<?php the_field('registration_link', $term); ?>" class="button">Register</a>
        </p>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php endwhile; endif; ?>