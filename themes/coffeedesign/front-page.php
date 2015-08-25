<?php get_header(); ?>

<div id="home" class="waypoint"></div>
<div id="events" class="waypoint"></div>


<?php query_posts(array (
  'post_type' => 'event',
  'posts_per_page' => 1,
  'post_status' => 'future',
  'order' => 'ASC' )
); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <section class="layout-content-wrapper sub-background sub-hero">
    <div class="sub-hero-bg" style="background-image: url(<?php the_field('background_image', $term); ?>)"></div>
    <div class="layout-content">

      <div class="hero">


        <?php
        $post_date  = get_the_date('c');
        $today      = current_time( 'c' );
        $post_month = get_the_date('Y-m');
        $this_month = date('Y-m');
        $image_id = get_post_thumbnail_id();
        $image_url = wp_get_attachment_image_src($image_id,'large', true);
        ?>


        <!-- Photo -->
        <?php if(has_post_thumbnail()) : ?>
          <div class="hero-photo">
            <div class="photo sub-circle" style="background-image: url('<?php echo $image_url[0]; ?>')"><?php the_post_thumbnail(); ?></div>
          </div>
        <?php endif; ?>

        <!-- Title -->

        <h2 class="hero-title"><a class="hero-title-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <hr>
        <!-- <p class="hero-date">
          <strong><?php the_date('l, F j, Y'); ?></strong><br>
          <?php if(get_field(location_name)) : ?>
            <a href="http://maps.apple.com/?q=<?php the_field('location_url', $term); ?>">
              <?php the_field('location_name', $term); ?>
            </a>
          <?php endif; ?>
        </p>
        <hr> -->

        <div class="hero-excerpt">
          <?php the_excerpt(); ?>
          <!-- <p>
            <a class="button sub-white" href="<?php the_permalink(); ?>">Learn more</a>
          </p>
        </div> -->

      </div>


    </div>
  </section>
  <?php endwhile; ?>
<?php else : ?>
  <section class="layout-content-wrapper">
    <div class="layout-content sub-wide">
      <h2>Our Latest Event</h2>
      <hr/>
      <p class="sub_heading">A free event, the last Friday of every month, with coffee and breakfast. <br class="sub-large"/>What a way to kick off your morning.</p>
      <p>
        <a class="button sub-outline" href="events">See all events</a>
      </p>
      <div class="layout-events">
        <?php
        query_posts(array (
          'post_type' => 'event',
          'order' => 'DSC',
          'posts_per_page' => 1,
          'paged'=>$paged,
        )); ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php include "partials/event.php"; ?>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>



<div id="about" class="waypoint"></div>
<section class="layout-content-wrapper sub-about">
  <div class="layout-content">
    <h2>About</h2>
    <hr/>
    <p class="sub_heading">In a mission to connect and inspire, Coffee & Design is a free monthly event series aimed towards design professionals in Kansas City.Through diverse event formats and topics, Coffee & Design is set out to teach and bring together designers across all disciplines and create a connected design community that can grow and learn from one another.</p>
  </div>
</section>
<div id="sponsors" class="waypoint"></div>
<section class="layout-content-wrapper sub-background sub-sponsors">
  <div class="layout-content sub-wide">
    <h2>A Huge Thanks</h2>
    <hr/>
    <p class="sub_heading">Coffee & Design doesn't happen without these fine folks.</p>
    <div class="sponsors">
      <!-- Espresso -->
      <div class="sponsors-tier sub-espresso">
        <?php query_posts(array ( 'post_type' => 'sponsor', 'tiers' => 'espresso', 'order' => 'ASC', 'posts_per_page' => -1 ));
          if (have_posts()) : while (have_posts()) : the_post();
            include 'partials/sponsor.php';
          endwhile; endif; ?>
      </div>
      <!-- French Press -->
      <div class="sponsors-tier sub-french_press">
        <?php query_posts(array ( 'post_type' => 'sponsor', 'tiers' => 'french_press', 'order' => 'ASC', 'posts_per_page' => -1 ));
          if (have_posts()) : while (have_posts()) : the_post();
            include 'partials/sponsor.php';
          endwhile; endif; ?>
      </div>
      <!-- Pour Over -->
      <div class="sponsors-tier sub-pour_over">
        <?php query_posts(array ( 'post_type' => 'sponsor', 'tiers' => 'pour_over', 'order' => 'ASC', 'posts_per_page' => -1 ));
          if (have_posts()) : while (have_posts()) : the_post();
            include 'partials/sponsor.php';
          endwhile; endif; ?>
      </div>
      <!-- Home Brew -->
      <div class="sponsors-tier sub-home_brew">
        <?php query_posts(array ( 'post_type' => 'sponsor', 'tiers' => 'home_brew', 'order' => 'ASC', 'posts_per_page' => -1 ));
          if (have_posts()) : while (have_posts()) : the_post();
            include 'partials/sponsor.php';
          endwhile; endif; ?>
      </div>
      <p><a href="mailto:kc@coffeedesign.org?subject=Coffee%20%26%20Design%20—%20Sponsorship%20Inquiry">Be a Sponsor</a></p>
    </div>
  </div>
</section>
<section class="layout-content-wrapper sub-dark">
  <div class="layout-content sub-wide">
    <small><h3 class="sub_heading">Friends of C&D</h3></small>
    <div class="sponsors-tier sub-friends_of">
      <?php query_posts(array ( 'post_type' => 'sponsor', 'tiers' => 'friends', 'order' => 'ASC', 'posts_per_page' => -1 ));
        if (have_posts()) : while (have_posts()) : the_post();
          include 'partials/sponsor.php';
        endwhile; endif; ?>
    </div>
  </div>
</section>
<div id="organizers" class="waypoint"></div>
<section class="layout-content-wrapper sub-background sub-organizers">
  <div class="layout-content">
    <h2>Organizers</h2>
    <hr/>
    <p class="sub_heading">The mugs behind the mug.</p>
    <?php query_posts(array ( 'post_type' => 'organizer', 'order' => 'DSC', 'posts_per_page' => -1 ));
        if (have_posts()) : while (have_posts()) : the_post();
        include "partials/organizer.php"?>
    <?php endwhile; endif; ?>
  </div>
</section>
<div id="contact" class="waypoint"></div>
<section class="layout-content-wrapper">
  <div class="layout-content sub-wide">
    <h2>Let's Talk</h2>
    <hr/>
    <div class="links">
      <div class="link"><a href="mailto:kc@coffeedesign.org" class="icon"><span class="icon-glyph sub-mail"></span><span class="icon-text">Email</span></a></div>
      <div class="link"><a href="http://twitter.com/kccoffeedesign" class="icon"><span class="icon-glyph sub-twitter"></span><span class="icon-text">Twitter</span></a></div>
      <div class="link"><a href="https://www.facebook.com/kcCoffeeDesign" class="icon"><span class="icon-glyph sub-facebook"></span><span class="icon-text">Facebook</span></a></div>
      <div class="link"><a href="https://www.youtube.com/channel/UCVASnQKD5ItG0LwknkDs0vw" class="icon"><span class="icon-glyph sub-youtube"></span><span class="icon-text">Youtube</span></a></div>
    </div>
    <p>Don't forget to sign up for the newsletter to be the first to know about our events!</p>
    <form id="mc-embedded-subscribe-form" action="http://coffeedesign.us3.list-manage1.com/subscribe/post?u=73a0928dffdd7ea5920f5069c&amp;id=1a612aa5f1" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="novalidate" class="validate">
      <div class="form-fields">
        <div class="form-fields-field sub-primary">
          <input id="mce-EMAIL" type="email" value="" name="EMAIL" placeholder="Your email address..." class="required email"/>
        </div>
        <div id="mce-responses" style="display: none;" class="clear">
          <div id="mce-error-response" style="display: none;" class="response"></div>
          <div id="mce-success-response" style="display: none;" class="response"></div>
        </div>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px; display: none">
          <input type="text" name="b_73a0928dffdd7ea5920f5069c_1a612aa5f1" value=""/>
        </div>
        <div class="form-fields-field">
          <input id="mc-embedded-subscribe" type="submit" value="Stay in touch" name="subscribe" class="button"/>
        </div>
      </div>
    </form>
  </div>
</section>

<?php get_footer(); ?>
