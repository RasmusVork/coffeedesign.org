<?php get_header(); ?>

<section class="layout-content-wrapper">
  <div class="layout-content sub-wide">

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>   

    <h1><?php wp_title(''); ?></h1>
    <?php the_content(); ?>

    <?php if( location_name ) : ?>
    <p>
      <a href="http://maps.apple.com/?q=<?php the_field('location_url', $term); ?>">
        <?php the_field('location_name', $term); ?>
      </a>
    </p>
    <?php endif; ?>

  <?php endwhile; ?>
<?php endif; ?>

  </div>
</div>
  
<?php get_footer(); ?>