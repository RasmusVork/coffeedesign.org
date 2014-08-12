<?php include 'partials/head.php' ?>

<div class="background"></div>

<div class="layout-header-wrapper">
  <header class="layout-header">
    <h1 class="site-title">Coffee &amp; Design</h1>
    <a href="<?php bloginfo('url'); ?>" class="layout-header-logo">
      <img src="<?php bloginfo('template_directory'); ?>/images/logo-coffeedesign.svg" alt="Coffee &amp; Design Logo" class="logo">
    </a>
    <div class="layout-header-nav">
      <a id="nav-toggle" href="#" class="icon-glyph sub-arrow-down"></a>
      <nav class="navigation">
        <?php $menuParameters = array(
            'container'       => false,
            'echo'            => false,
            'items_wrap'      => '%3$s',
            'depth'           => 0,
          );

          echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?>
      </nav>
    </div>
  </header>
</div>

<main class="layout-site_content nest">