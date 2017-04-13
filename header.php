<?php
/**
 * @package WordPress
 * @subpackage YOUR_THEME
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/inc/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

        <script src="<?php bloginfo('template_url'); ?>/inc/js/libs/modernizr-2.6.2.min.js"></script>

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        
        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
        
        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <header>
            <nav class="navbar navbar-default ">
                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="/">
                            <img class="brand img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/white_logo.png">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="collapse-navbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#funcionamento" class="itemMenu">Como Funciona</a></li>
                            <li><a href="#" class="itemMenu">Soluções</a></li>
                            <li><a href="#" class="itemMenu">Nossos Diferenciais</a></li>
                            <li><a href="#" class="itemMenu">Blog</a></li>
                            <li><a href="#contato" class="itemMenu">Contato</a></li>
                            <li><button type="button" class="btn btn-gold btn-lg">Vamos Conversar?</button></li>
                        </ul>
                    </div>
                </div>
            </nav>


        </header>

    	<!--[if lt IE 7]>
    	    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    	<![endif]-->