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
    <p>
      <a class="button sub-outline" href="events">See all events</a>
    </p>
    <div class="layout-events">
      <?php query_posts(array ( 'post_type' => 'event', 'posts_per_page' => 2, 'post_status' => 'future', 'order' => 'ASC' ));
      include "partials/event.php"; ?>
    </div>
  </div>
</section>
<div id="about" class="waypoint"></div>
<section class="layout-content-wrapper sub-background sub-about">
  <div class="layout-content">
    <h2>About</h2>
    <hr/>
    <p class="sub_heading">In a mission to connect and inspire, Coffee & Design is a free monthly event series aimed towards design professionals in Kansas City.Through diverse event formats and topics, Coffee & Design is set out to teach and bring together designers across all disciplines and create a connected design community that can grow and learn from one another.</p>
  </div>
</section>
<div id="sponsors" class="waypoint"></div>
<section class="layout-content-wrapper">
  <div class="layout-content sub-wide">
    <h2>A Huge Thanks</h2>
    <hr/>
    <p class="sub_heading">Coffee & Design doesn't happen without these fine folks.</p>
    <div class="sponsors">
      <!-- Espresso -->
      <div class="sponsors-tier sub-espresso">
        <?php query_posts(array ( 'post_type' => 'sponsor', 'tiers' => 'espresso', 'order' => 'DSC' ));
          if (have_posts()) : while (have_posts()) : the_post();
            include 'partials/sponsor.php'; 
          endwhile; endif; ?>
      </div>
      <!-- French Press -->
      <div class="sponsors-tier sub-french_press">
        <?php query_posts(array ( 'post_type' => 'sponsor', 'tiers' => 'french_press', 'order' => 'DSC' ));
          if (have_posts()) : while (have_posts()) : the_post();
            include 'partials/sponsor.php'; 
          endwhile; endif; ?>
      </div>
      <!-- Pour Over -->
      <div class="sponsors-tier sub-pour_over">
        <?php query_posts(array ( 'post_type' => 'sponsor', 'tiers' => 'pour_over', 'order' => 'DSC' ));
          if (have_posts()) : while (have_posts()) : the_post();
            include 'partials/sponsor.php'; 
          endwhile; endif; ?>
      </div>
      <!-- Home Brew -->
      <div class="sponsors-tier sub-home_brew">
        <?php query_posts(array ( 'post_type' => 'sponsor', 'tiers' => 'home_brew', 'order' => 'DSC' ));
          if (have_posts()) : while (have_posts()) : the_post();
            include 'partials/sponsor.php'; 
          endwhile; endif; ?>
      </div>
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