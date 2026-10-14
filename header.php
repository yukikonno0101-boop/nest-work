<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="page-top">
<?php wp_body_open(); ?>
  <a class="skip-link" href="#main">本文へ移動</a>
  <header class="site-header">
    <div class="container header-inner">
      <a class="site-logo" href="<?php echo esc_url( nest_work_url( '' ) ); ?>" aria-label="NEST WORK ホーム">NEST <span>WORK</span><small>COWORKING SPACE</small></a>
      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-nav" aria-label="メニューを開く" hidden><span class="menu-icon" aria-hidden="true"><span></span><span></span><span></span></span></button>
      <nav class="site-nav" id="site-nav" aria-label="メインナビゲーション"><?php nest_work_navigation(); ?></nav>
    </div>
  </header>
