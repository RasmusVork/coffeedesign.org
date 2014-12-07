<?php 
  $image_id = get_post_thumbnail_id();
  $image_url = wp_get_attachment_image_src($image_id,'large', true);
?>

<div class="block-wrapper sub-twoUp">
  <a <?php if(get_field("item_link")) : ?> href="<?php the_field('item_link', $term); ?>" <?php endif; ?>>
    <div class="block pad-4">
      <div class="xmas">
        <div class="xmas-photo">
          <div class="photo sub-christmasList" style="background-image: url('<?php echo $image_url[0]; ?>')">
            <?php if(has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php endif;?>
          </div>
        </div>
        <div class="xmas-title">
          <h2><?php the_title(); ?></h2>
          <?php if(get_field("item_by")) : ?>
            <h3><?php the_field('item_by', $term); ?></h3>
          <?php endif; ?>
        </div>
        <?php if(get_field("item_price")) : ?>
          <div class="xmas-price"><div class="xmas-price-text">$<?php the_field('item_price', $term); ?></div></div>
        <?php endif; ?>
      </div>
    </div>
  </a>
</div>