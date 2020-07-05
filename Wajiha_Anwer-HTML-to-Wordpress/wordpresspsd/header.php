
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo( 'name'); ?></title>
    <link href="<?php echo get_template_directory_uri() ; ?>/css/style.css" rel="stylesheet">
    <!--Font Awesome-->
    <link href="<?php echo get_template_directory_uri() ; ?>/css/all.min.css" rel="stylesheet">
  </head>

  <body>

      <!--slider-->

      <header class="header">

    <div class="wrapper2">
      <div class="row">
        <?php dynamic_sidebar('logo');?>

        <div class="logo-right">
          <div class="logo-right2">
            <nav>
          <i class="fas fa-biking"></i>
          <p>Express Delivery +1 234 567 890</p>
        </nav>
        </div>

        <div class="col col-nav">
          <nav class="nav">
          <?php  wp_nav_menu(
            array(
              'theme_location' => 'primary_menu',
              'container_class' => 'main_nav',
            ) ); ?>
          </nav>
        </div>
      </div>
    </div>
  </div>
      </header>
    </div>
