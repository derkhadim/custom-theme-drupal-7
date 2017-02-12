<?php

/**
 * @file
 * theme implementation to display a single Drupal page.
 *
 * Available variables:
 * for info on available variables see modules/system/page.tpl.php
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<header role="banner" class="header">
  <div class="common-header">
    <div class="row">
      <div class="small-12 medium-6 large-6">
        <div class="site_name_flag">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>
          <?php if ($site_name || $logo): ?>
            <div class="site_name">
              <a href="<?php print $front_page; ?>">
                <h1 href="<?php print $front_page; ?>" title="<?php print $site_name; ?>"><?php print $site_name; ?></h1>
              </a>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="small-12 medium-6 large-6">
        <?php if ($page['search_block']): ?>
          <?php print render($page['search_block']) ?>
        <?php endif ?>
      </div>
    </div>
  </div>
  <?php if ($page['main-menu']): ?>
    <div class="menu_area">
      <div class="row">

        <div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle></button>
          <div class="title-bar-title">Menu</div>
        </div>

        <div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
          <div class="top-bar-left">
            <?php print render($page['main-menu']) ?>
          </div>
        </div>

      </div>
    </div>
  <?php endif ?>
</header> <!-- /.header -->

<main role="main" class="main">

  <?php if ($page['sub_header']): ?>
    <?php print render($page['sub_header']) ?>
  <?php endif ?>
  
  <?php if ($page['breadcrumb']): ?>
    <?php print render($page['breadcrumb']) ?>
  <?php endif ?>

  <?php if($messages){ ?>
    <div class="row">
      <div class="system-messages">
        <?php print $messages; ?>
      </div>
    </div>
  <?php } ?>
  
  <?php if ($page['highlighted']): ?>
    <div class="row">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($tabs['#primary']) || !empty($action_links)): ?>
    <nav id="content-author-navigation">
      <?php if (!empty($tabs['#primary'])): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    </nav>
  <?php endif; ?>
  
  <!-- Main content -->
  <?php if ($page['right_sidebar']): ?>
    <div class="row">
      <div class="small-12 medium-8 large-8">
        <?php print render($page['content']) ?>
      </div>
      <div class="smal-12 medium-4 large-offset-1 large-3">
        <?php print render($page['right_sidebar']) ?>
      </div>
    </div>
  <?php else: ?>
    <?php print render($page['content']) ?>
  <?php endif ?>


</main>

<?php if ($page['footer'] || $debug): ?>
  <footer class="footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer> <!-- /.footer -->
<?php endif; ?>

