<?php get_header(); ?>
  
<section class="layout-content-wrapper">
  <div class="layout-content sub-wide">

    <h1><?php wp_title(''); ?></h1>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="nest">
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <?php the_content(); ?>
        </article>
        
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>