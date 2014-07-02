<div class="organizer">
  <div class="organizer-avatar">
    <div style="background-image: url('<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ); ?>')" class="photo sub-circle"><?php the_post_thumbnail(); ?></div>
  </div>
  <div class="organizer-info">
    <p><strong><?php the_title(); ?></strong></p>
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