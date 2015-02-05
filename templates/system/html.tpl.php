<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <meta name="viewport" content="width=device-width">
  <style>
    <?php include($directory . '/inline.css'); ?>
  </style>
  <link rel="shortcut icon" href="<?php print $directory; ?>/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php print $directory; ?>/images/apple-touch-icon.png">
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script>
  if (window.innerWidth > 600) {
    document.write('<link id="js-desktop-css" rel="stylesheet" href="/<?php print $directory; ?>/desktop.css" type="text/css" media="all" title="no title" charset="utf-8">');
  }
  </script>
  <noscript>
    <link id="js-desktop-css" rel="stylesheet" href="/<?php print $directory; ?>/desktop.css" type="text/css" media="all" title="no title" charset="utf-8">
  </noscript>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <!--[if lt IE 8]>
      <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

</body>
</html>
