<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      wp_head();
    ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <nav class="navbar navbar-inverse">
            <div class="container">
            <?php
              wp_nav_menu(array(
                'location'        => 'menu-utama',
                'depth'           => 2,
                'container'       => 'div',
                'menu_class'      => 'nav navbar-nav',
                'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
                'fallback_cb'     => 'wp_bootstrap_navwalker::callback()',
                'walker'          => new wp_bootstrap_navwalker()
              ));
              ?>
            </div>
</nav>

 <body>
