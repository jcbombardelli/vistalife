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
query_posts('posts_per_page=2');
?>

    <section class="container howItWorks centralized-content">
        <div class="row" id="funcionamento">
            <h2 class="titulo topCasaFina-title">COMO FUNCIONA</h2>
            <div class="col-md-3 col-xs-13">
                <figure class="thumbnail">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_01.png" alt="" width="50%" height="50%">
                    <figcaption class="caption">
                        <h3 class="titulo">Conversar</h3>
                        <p>
                            É conversando que se entende. Por isso, queremos ouvir um pouco mais sobre a sua história e quais são suas necessidades, objetivos e prioridades.
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-3 col-xs-13">

                <figure class="thumbnail">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_02.png" alt="" width="50%" height="50%">
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
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_03.png" alt="" width="50%" height="50%">
                    <figcaption class="caption">
                        <h3 class="titulo">Implementar</h3>
                        <p>
                            Esse é o momento de colocar em prática todas as ações planejadas a fim de que você consiga atingir suas metas.
                        </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-3 col-xs-13">

                <figure class="thumbnail">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_04.png" width="50%" height="50%" alt="">
                    <figcaption class="caption">
                        <h3 class="titulo">Acompanhar</h3>
                        <p>
                            Monitoramos com atenção para garantir que seus planos se mantenham nos eixos.
                        </p>
                    </figcaption>
                </figure>
            </div>
        </div>

    </section>

    <div class="jumbotron" id="ourPlanning">
        <div class="container our-planning">
            <h2 class="titulo mainTitle">NOSSO PLANEJAMENTO</h2>
            <div class="col-md-12 text-center">
                <p>Nosso planejamento financeiro aborda diversos assuntos, aplicados com inteligência para que seu planos se tornem reais.</p>
                <div class="margin-4em"></div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/solucao.png" class="img-solution img-responsive" alt="">
            </div>
        </div>
    </div>

    <section class="centralized-content container" id="nossos-diferenciais">
        <div class="row panel-group" id="group-diferenciais">
        <h2 class="titulo">DIFERENCIAIS</h2>
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

    <div class="jumbotron" id="blog">
        <div class="post-padding">
            <h2 class="title">BLOG</h2>

            <span class="postArea">
                <?php 
                    $content = file_get_contents('http://blog.temp.bruno.works/wp-json/wp/v2/posts/?per_page=2');
                    $jsonContent = json_decode($content);
                if (count($jsonContent) > 0){ ?>
                    <div class="row div-center">

                        <?php 
                        foreach ($jsonContent as $post) {
                            $postArray = (array)$post;
                            $postArray['_links'] = (array)$postArray['_links'];
                            $thumbLink = file_get_contents($postArray['_links']['wp:featuredmedia'][0]->href);
                            $thumbLink = json_decode($thumbLink, true);
                        ?>

                            <div class="col-md-5 col-xs-12 post-style" id="post-<?=$post->id?>">
                                <div class="col-md-5 col-xs-12 post-thumb">
                                    <img class="post-img" src="<?=$thumbLink['media_details']['sizes']['medium']['source_url']?>">
                                </div>
                                <div class="post-description col-md-7 col-xs-12">
                                    <h3 class="title"><a href="<?=$post->link ?>" rel="bookmark" title="<?=$post->title->rendered ?>"><?=$post->title->rendered ?></a></h3 class="title">
                                    <?=$post->excerpt->rendered ?>
                                </div>
                                <div class="post-buttons col-md-7 col-xs-12">
                                    <a href="<?=$post->link ?>" class="btn btn-gold btn-lg btn-loadpost">SAIBA MAIS</a>
                                </div>
                            </div>

                        <?php 
                        } ?>
                    </div>

                <?php 
                }else { ?>

                    <h2 class="center">Not Found</h2>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                    <?php get_search_form(); ?>

                <?php 
                } ?>
            </span>
        </div>
        
    </div>

    <div id="contact-form" class="jumbotron contato">
        <a id="contact-form-link" class="center fadein-item" target="#contato" href="#"><h2>Ficou Interessado? Clique aqui!</h2></a>
        <section id="contato" class="div-center container content-padding" style="display: none;">
            <div class="col-md-6">
                <span class="center">
                    <h2>Contato</h2>
                    <h4>Queremos conversar com você!</h4>
                    <h4>Deixe sua mensagem que entraremos em contato.</h4>
                </span>
                <br><br>
                <form action="https://formspree.io/hi@bruno.works" method="POST" target="_blank">
                    <div class="form-group">
                        <div>
                            <input type="text" required name="name" placeholder="Nome">
                        </div>
                        <div>
                            <input type="phone" required name="phone" placeholder="Telefone">
                        </div>
                        <div>
                            <input type="email" required name="_replyto" placeholder="Email">
                        </div>
                        <div>
                            <textarea required name="message" placeholder="Deixe sua mensagem!"></textarea>
                        </div>
                        <input type="submit" class="btn btn-gold btn-lg" value="Enviar">
                    </div>
                </form>
            </div>
        </section>
    </div>
    

<?php 
get_sidebar(); ?>

<?php 
get_footer(); ?>
