<?php 
  $image_id = get_post_thumbnail_id();
  $image_url = wp_get_attachment_image_src($image_id,'large', true);
?>

<div class="block-wrapper">
  <div class="block pad-6">
    <div class="block-photo">
      <div class="photo sub-contain" style="background-image: url('<?php echo $image_url[0]; ?>')">
        <?php if(has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
        <?php endif;?>
      </div>
    </div>
    <div class="block-into">
      <div class="grid align-middle">
        <div class="grid-items">
          <div class="col">
            <?php echo get_post_meta($post->ID, 'user_submit_name', true); ?>
          </div>
          <div class="col min">
            <div class="likes">
              <?php if(function_exists(kkLikeButton())){kkLikeButton();} ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>