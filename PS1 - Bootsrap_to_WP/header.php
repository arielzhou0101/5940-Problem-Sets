<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Solid - Bootstrap Business Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php blogInfo('template_url'); ?>/img/favicon.png" rel="icon">
  <link href="<?php blogInfo('template_url'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900|Lato:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php blogInfo('template_url'); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php blogInfo('template_url'); ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php blogInfo('template_url'); ?>/lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
  <link href="<?php blogInfo('template_url'); ?>/lib/hover/hoverex-all.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php blogInfo('template_url'); ?>/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Solid
    Template URL: https://templatemag.com/solid-bootstrap-business-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://dev-ariel5940.pantheonsite.io/">Start Bootstrap</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <!--div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"-->
				<div class="navbar-collapse collapse navbar-right">
						  <?php
						   wp_nav_menu(array(
							  'menu'              => 'primary',
							  'theme_location'    => 'primary',
							  'depth'             => 2,
							  'container'         => 'div',
							  'container_class'   => 'collapse navbar-collapse',
							  'container_id'      => 'bs-example-navbar-collapse-1',
							  'menu_class'        => 'nav navbar-nav',
							  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							  'walker'            => new wp_bootstrap_navwalker())
						   );
						  ?>
					</div><!--/.nav-collapse -->

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
