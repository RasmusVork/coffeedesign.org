<?php get_header(); ?>
  
<section class="layout-content-wrapper sub-translucent">
  <div class="layout-content sub-narrow sub-align_left sub-wide nest-1">
    <div class="grid spaced break-max-small">
      <div class="grid-items">
        <div class="col nest-3">
          <h2>Contest</h2>
          <p>In preparation for our upcoming letterpress and screen printing event [link] we wanted to continue to shake things up a bit and put a call out to all of of you awesome Kansas City designers. We're running a three week contest, open to all local designers, to show us an amazing Coffee & Design mark. You have complete creative freedom, it doesn't have to match any brand, it simply must at least say "Coffee & Design." The top two designs will get made into screens and printed on shirts at our September event. So let your creative juices flow and show us what you got!</p>
          <p><em>Contest Details</em></p>
          <ul class="nest-5">
            <li>Open for Submissions: August 20th - September 10th</li>
            <li>Voting: September 15th - September 21st</li>
            <li>Winners Announced: September 24th</li>
            <li>Live Printing: September 26th</li>
          </ul>
          <p><em>Artwork Submission Criteria</em></p>
          <ul class="nest-5">
            <li>No larger than 6" wide or 12" tall</li>
            <li>1 Colour only</li>
            <li>Must provide original artwork in vector form</li>
            <li>Also provide a display image of 800x800px, black artwork on white background</li>
          </ul>
        </div>
        <div class="col nest-3">
          <div class="contest-form">
            <h4>Submit your work</h4>
            <?php if (function_exists('display_usp_form')) display_usp_form('letterpress-contest'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="layout-content-wrapper sub-background">
  <div class="layout-content sub-wide sub-align_left nest-2">
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