<?php
/**
 * @package WordPress
 * @subpackage YOUR_THEME
 */
$linkPath = (is_home() ? "" : "/");
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

        <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/assets/js/smooth-scroll.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/assets/js/jssor.mini.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/assets/js/theme.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/inc/js/libs/modernizr-2.6.2.min.js"></script>

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        
        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
        
        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <header>
            <nav class="navbar navbar-default custom-navbar vistalife-navbar">
                <div class="vistalife-navigator container">
                    <div class="col-md-3">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="/">
                                <img class="brand img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/white_logo.png">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <!-- Esta parte só exibirá no Mobile (quadrado com 3 riscos do menu) -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" 
                          data-toggle="collapse" data-target="#navbar">
                          <!-- A classe sr-only só é exibida em leitor de tela para que pessoas
                          com deficiencia visual entendam o que há na tela -->
                          <span class="sr-only">Menu de Navegação</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          </button>
                        </div>
                        <!-- Itens da navbar -->
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="<?=$linkPath?>#funcionamento" class="itemMenu">Como Funciona</a></li>
                                <li><a data-scroll href="<?=$linkPath?>#ourPlanning" class="itemMenu">Nosso Planejamento</a></li>
                                <li><a data-scroll href="<?=$linkPath?>#nossos-diferenciais" class="itemMenu">Diferenciais</a></li>
                                <li><a data-scroll href="<?=$linkPath?>#blog" class="itemMenu">Blog</a></li>
                                <li><a data-scroll href="<?=$linkPath?>#contact-form" class="itemMenu">Contato</a></li>
                                <li><a data-scroll href="<?=$linkPath?>#contact-form" class="itemMenu btn btn-gold btn-lg act-letstalk">Vamos Conversar?</a></li>
                            </ul>
                        </div><!-- fim .nav-collapse -->
                    </div>
                </div>
            </nav>
            <section class="pointer">
                <a class="right-pointer" href="#"><</a>
                <a class="left-pointer" href="#">></a>
            </section>
            <section class="container howItWorks">
                <div class="topCasaFina-banner">
                    <h3>Trabalhamos na melhor forma de estruturar suas finanças</h3>
                    <h3>para que seus sonhos se tornem realidade.</h3>
                    <button type="button" class="btn btn-gold btn-lg btn-moreabout">SAIBA MAIS</button>
                </div>
            </section>
        </header>

    	<!--[if lt IE 7]>
    	    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    	<![endif]-->