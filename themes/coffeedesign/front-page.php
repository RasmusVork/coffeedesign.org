<?php get_header(); ?>

<div id="home" class="waypoint"></div>
<section class="layout-content-wrapper sub-background sub-intro">
  <div class="layout-content"><img src="<?php bloginfo('template_directory'); ?>/images/icon-coffeedesign.svg" class="logo-large"/>
    <h1 class="sub-title">Connect. Inspire. Learn. Grow.</h1>
    <p class="sub_heading">Coffee & Design is a free, monthly event to connect design professionals in Kansas City.</p>
  </div>
</section>
<div id="events" class="waypoint"></div>
<section class="layout-content-wrapper">
  <div class="layout-content sub-wide">
    <h2>Upcoming Events</h2>
    <hr/>
    <p class="sub_heading">A free event, the last Friday of every month, with coffee and breakfast. <br class="sub-large"/>What a way to kick off your morning.</p>
    <div class="layout-events">
      <?php query_posts(array ( 'post_type' => 'event', 'posts_per_page' => 2, 'post_status' => 'future', 'order' => 'ASC' ));
      include "partials/event.php"; ?>
    </div>
    <a href="events">All events...</a>
  </div>
</section>
<div id="about" class="waypoint">       </div>
<section class="layout-content-wrapper sub-background sub-about">
  <div class="layout-content">
    <h2>About</h2>
    <hr/>
    <p class="sub_heading">In a mission to connect and inspire, Coffee & Design is a free monthly event series aimed towards design professionals in Kansas City.Through diverse event formats and topics, Coffee & Design is set out to teach and bring together designers across all disciplines and create a connected design community that can grow and learn from one another.</p>
  </div>
</section>
<div id="sponsors" class="waypoint"></div>
<section class="layout-content-wrapper">
  <div class="layout-content">
    <h2>A Huge Thanks</h2>
    <hr/>
    <p class="sub_heading">Coffee & Design doesn't happen without these fine folks.</p>
    <div class="sponsors">
      <?php query_posts(array ( 'post_type' => 'sponsor', 'order' => 'DSC' ));
        if (have_posts()) : while (have_posts()) : the_post(); ?>
        <a href="<?php the_field('sponsor_url', $term); ?>" class="sponsor">
          <?php the_post_thumbnail(); ?>
        </a>
      <?php endwhile; endif; ?>
    </div>
    <p><a href="mailto:hello@coffeedesign.org?subject=Coffee%20%26%20Design%20—%20Sponsorship%20Inquiry">Be a Sponsor</a></p>
  </div>
</section>
<div id="organizers" class="waypoint"></div>
<section class="layout-content-wrapper sub-background sub-organizers">
  <div class="layout-content">
    <h2>Organizers</h2>
    <hr/>
    <p class="sub_heading">The mugs behind the mug.</p>
    <?php query_posts(array ( 'post_type' => 'organizer', 'order' => 'DSC' ));
        if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="organizer">
          <div class="organizer-avatar">
            <div style="background-image: url('<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ); ?>')" class="photo sub-circle"><?php the_post_thumbnail(); ?></div>
          </div>
          <div class="organizer-info">
            <h3><?php the_title(); ?></h3>
            <div class="organizer-info-services">
              
              <?php if(get_field("organizer_email")): ?>
                <a href="mailto:<?php the_field('organizer_email', $term) ?>" class="icon">
                  <span class="icon-glyph sub-mail"></span>
                </a>
              <?php endif; ?>

              <?php if(get_field("organizer_website")): ?>
                <a href="<?php the_field('organizer_website', $term) ?>" class="icon">
                  <span class="icon-glyph sub-website"></span>
                </a>
              <?php endif; ?>

              <?php if(get_field("organizer_twitter")): ?>
                <a href="https://twitter.com/<?php the_field('organizer_twitter', $term) ?>" class="icon">
                  <span class="icon-glyph sub-twitter"></span>
                </a>
              <?php endif; ?>

              <?php if(get_field("organizer_dribbble")): ?>
                <a href="https://dribbble.com/<?php the_field('organizer_dribbble', $term) ?>" class="icon">
                  <span class="icon-glyph sub-dribbble"></span>
                </a>
              <?php endif; ?>

              <?php if(get_field("organizer_linkedin")): ?>
                <a href="http://www.linkedin.com/in/<?php the_field('organizer_linkedin', $term) ?>" class="icon">
                  <span class="icon-glyph sub-linkedin"></span>
                </a>
              <?php endif; ?>

              <?php if(get_field("organizer_github")): ?>
                <a href="https://github.com/<?php the_field('organizer_github', $term) ?>" class="icon">
                  <span class="icon-glyph sub-github"></span>
                </a>
              <?php endif; ?>

              <?php if(get_field("organizer_rdio")): ?>
                <a href="http://rdio.com/people/<?php the_field('organizer_rdio', $term) ?>" class="icon">
                  <span class="icon-glyph sub-rdio"></span>
                </a>
              <?php endif; ?>

            </div>
          </div>
        </div>
    <?php endwhile; endif; ?>
  </div>
</section>
<div id="contact" class="waypoint"></div>
<section class="layout-content-wrapper">
  <div class="layout-content sub-wide">
    <h2>Let's Talk</h2>
    <hr/>
    <div class="links">
      <div class="link"><a href="mailto:hello@coffeedesign.org" class="icon"><span class="icon-glyph sub-mail"></span><span class="icon-text">hello@coffeedesign.org</span></a></div>
      <div class="link"><a href="http://twitter.com/kccoffeedesign" class="icon"><span class="icon-glyph sub-twitter"></span><span class="icon-text">@kcCoffeeDesign</span></a></div>
      <div class="link"><a href="https://www.facebook.com/kcCoffeeDesign" class="icon"><span class="icon-glyph sub-facebook"></span><span class="icon-text">kcCoffeeDesign</span></a></div>
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