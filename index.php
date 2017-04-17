<?php
/**
 * @package WordPress
 * @subpackage YOUR_THEME
 */

get_header();
function custom_excerpt_length( $length ) {
    return 29;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>

    <section class="container howItWorks" id="funcionamento">
        <div class="row">
            <h2 data-toogle="collapse" data-target="p" class="titulo topCasaFina-title">COMO FUNCIONA</h2>
            <div class="col-md-3 col-xs-13">
                <figure class="thumbnail">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/goldIcon001.png" alt="" width="50%" height="50%">
                    <figcaption class="caption">
                        <h3 class="titulo">Conversar</h3>
                        <p>
                            É conversando que se entende. Por isso, queremos ouvir um pouco mais sobre a sua história e quais são seus projetos, objetivos e prioridades.
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-3 col-xs-13">

                <figure class="thumbnail">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/goldIcon001.png" alt="" width="50%" height="50%">
                    <figcaption class="caption">
                        <h3 class="titulo">Planejar</h3>
                        <p>
                            Definimos estratégias e desenhamos as melhores opções, para que seus projetos de vida sejam realizados.
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-3 col-xs-13">

                <figure class="thumbnail">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/goldIcon001.png" alt="" width="50%" height="50%">
                    <figcaption class="caption">
                        <h3 class="titulo">Implementar</h3>
                        <p>
                            Esse é o momento de colocar em prática nossas ações para que seus objetivos se tornem realidade.
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-3 col-xs-13">

                <figure class="thumbnail">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/goldIcon001.png" width="50%" height="50%" alt="">
                    <figcaption class="caption">
                        <h3 class="titulo">Acompanhar</h3>
                        <p>
                            Monitoramos de perto para garantir que seus planos se mantenham nos eixos.
                        </p>
                    </figcaption>
                </figure>
            </div>
        </div>

    </section>

    <div class="jumbotron" id="ourPlanning">
        <div class="container content-padding our-planning">
            <h2 class="titulo mainTitle">NOSSO PLANEJAMENTO</h2>
            <div class="col-md-12 text-center">
                <p>Nosso planejamento financeiro aborda diversos assuntos, aplicados com inteligência para que seu planos se tornem reais.</p>
            </div>
            <div class="col-md-12">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/solucao.png" class="img-solution img-responsive" alt="">
            </div>
        </div>
    </div>

    <section class="container" id="nossos-diferenciais">
        <h2 class="titulo">DIFERENCIAIS</h2>
        <div class="row panel-group" id="group-diferenciais">
            <div class="col-md-4 col-xs-12">
                <div class="panel-heading" style="background-color: #B0924E; color: white" align="center">
                    <h4>CFP® - Certified Financial Planner</h1>
                </div>
                <div id="text-cfp" class="collapse in">
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="panel-heading" style="background-color: #B0924E; color: white" align="center">
                    <h4>Experiência</h1>
                </div>
                <div id="text-cfp" class="collapse in">
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="panel-heading" style="background-color: #B0924E; color: white" align="center">
                    <h4>Alinhamento de Interesses</h1>
                </div>
                <div id="text-cfp" class="collapse in">
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,.</p>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <div class="jumbotron">
        <div class="post-padding">
            <h2 class="title">BLOG</h2>

            <span class="postArea">
                <?php 
                if (have_posts()) : ?>
                    <div class="row">

                        <?php 
                        while (have_posts()) : the_post(); ?>

                            <div <?php post_class("col-md-5 col-xs-12 post-style") ?> id="post-<?php the_ID(); ?>">
                                <div class="col-md-5 col-xs-12 post-thumb">
                                    <img class="post-img" src="<?php the_post_thumbnail_url() ?>">
                                </div>
                                <div class="post-description col-md-7 col-xs-12">
                                    <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3 class="title">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="post-buttons col-md-7 col-xs-12">
                                    <a href="<?php the_permalink() ?>" class="btn btn-gold btn-lg btn-loadpost">SAIBA MAIS</a>
                                </div>
                            </div>

                        <?php 
                        endwhile; ?>

                        <div class="navigation">
                            <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                            <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                        </div>
                    </div>

                <?php 
                else : ?>

                    <h2 class="center">Not Found</h2>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                    <?php get_search_form(); ?>

                <?php 
                endif; ?>
            </span>
        </div>
        
    </div>

    <div class="jumbotron contato">
        <a class="center fadein-item" target="#contato" href="#"><h2>Ficou Interessado? Clique aqui!</h2></a>
        <section id="contato" class="div-center container content-padding" style="display: none;">
            <div class="col-md-6">
                <h2>Contato</h2>
                <h4>Entre em contato conosco</h4>
                <form action="https://formspree.io/hi@bruno.works" method="POST" target="_blank">
                    <div class="form-group">
                        <div>
                            <input type="text" name="name" placeholder="Nome">
                        </div>
                        <div>
                            <input type="phone" name="phone" placeholder="Telefone">
                        </div>
                        <div>
                            <input type="email" name="_replyto" placeholder="Email">
                        </div>
                        <div>
                            <textarea name="message" placeholder="Deixe sua mensagem!"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Enviar">
                    </div>
                </form>
            </div>
        </section>
    </div>
    

<?php 
get_sidebar(); ?>

<?php 
get_footer(); ?>
