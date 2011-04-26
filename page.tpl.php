<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>
<body>
<div id="frame">
  <div id="nav">
    <?php if ($primary_links): ?>
      <div id="primary-menu">
        <?php print $primary_links_tree; ?>
      </div><!-- /primary links menu -->
    <?php endif; ?>
</div>
<div id="header">
  <?php if ($logo) : ?>
    <a class='site-logo' href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print($logo) ?>" alt="<?php print t('Home') ?>" border="0" /></a>
  <?php endif; ?>
    
  <?php if ($site_name) : ?>
      <div class='site-name'><h1><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print($site_name) ?></a></h1></div>
  <?php endif;?>
    
  <?php if ($site_slogan) : ?>
    <div class='site-slogan'><h2 class='site-slogan'><?php print($site_slogan) ?></h2></div>
  <?php endif;?>
</div>
<div id="content">
  <?php if ($content_top): ?>
    <div id="content-top">
      <?php print $content_top; ?>
    </div>
  <?php endif; ?>
  <?php print $breadcrumb; ?>
  <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
  <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
  <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
  <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
  <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
  <?php if ($show_messages && $messages): print $messages; endif; ?>
  <?php print $help; ?>
  <div class="clear-block">
    <?php print $content ?>
  </div>
  <br />
  <?php print $feed_icons ?>
  <?php if ($content_bottom): ?>
  <div id="content-bottom">
    <?php print $content_bottom; ?>
  </div>
  <?php endif; ?>
</div>	
<div id="sidebar">
  <div id="sidebar">
    <?php print $search_box ?>
    <?php print $sidebar ?>
  </div>
</div>
<br clear="all" />
</div>
<div id="footer">
  <p><?php print '<div class="footer-message">'. $footer_message .'</div>' . '<div class="footer">'. $footer .'</div>' . '<div class="credits"><a href="http://drupalservers.net/drupal-6-themes" title="Drupal 6 Themes">Drupal 6 themes</a> by <a href="http://arborwebdevelopment.com" title="Arbor Web Development">Arbor Web Development</a></div>'  ?></p>
</div>
<?php print $closure ?>
</body>
</html>