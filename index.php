<?php
/**
 * @package WordPress
 * @subpackage YOUR_THEME
 */

get_header(); 
?>

	<section class="container howItWorks" id="funcionamento">
        <div class="topCasaFina-banner">
            <h3>Trabalhamos na melhor forma de estruturar suas finanças</h3>
            <h3>para que seus sonhos se tornem realidade.</h3>
            <button type="button" class="btn btn-gold btn-lg" style="margin-top: 10px">SAIBA MAIS</button>
        </div>
        <h2 data-toogle="collapse" data-target="p" class="titulo">COMO FUNCIONA</h2>

        <div class="row">
            <div class="col-xs-3">

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

            <div class="col-xs-3">

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
            <div class="col-xs-3">

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
            <div class="col-xs-3">

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

    <div class="jumbotron">
        <div class="container">
            <h2 class="titulo">NOSSO PLANEJAMENTO</h2>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/solucao.png" class="img-responsive" alt="">
        </div>
    </div>

    <section class="container" id="nossos-diferenciais">
        <h2 class="titulo">NOSSOS DIFERENCIAIS</h2>
        <div class="row panel-group" id="group-diferenciais">
            <div class="col-md-4 col-xs-12 panel">
                <div class="panel-heading" style="background-color: #B0924E; color: white" align="center">
                    <h3 class="panel-title" data-toogle="collapse" data-target="#text-cfp" data-parent="#group-diferenciais">CFP(R)</h3>
                </div>
                <div id="text-cfp" class="collapse in">
                    <div class="panel-body" style="background-color: #E6E6E6">
                        <p>uahduahduadhauudhauudhauas uahsuahsu aushaus .... </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12 panel">
                <div class="panel-heading" style="background-color: #B0924E; color: white" align="center">
                    <h3 class="panel-title" data-toogle="collapse" data-target="#text-cfp" data-parent="#group-diferenciais">CFP(R)</h3>
                </div>
                <div id="text-cfp" class="collapse in">
                    <div class="panel-body" style="background-color: #E6E6E6">
                        <p>uahduahduadhauudhauudhauas uahsuahsu aushaus .... </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12 panel">
                <div class="panel-heading" style="background-color: #B0924E; color: white" align="center">
                    <h3 class="panel-title" data-toogle="collapse" data-target="#text-cfp" data-parent="#group-diferenciais">CFP(R)</h3>
                </div>
                <div id="text-cfp" class="collapse in">
                    <div class="panel-body" style="background-color: #E6E6E6">
                        <p>uahduahduadhauudhauudhauas uahsuahsu aushaus .... </p>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <div class="jumbotron" class="contato">
        <section id="contato" class="container">
            <h2>Contato</h2>
            <h4>Entre em contato conosco</h4>

            <form>
                <div class="form-group">
                    <label for="contato-nome">Nome:</label>
                    <input id="contato-nome" class="form-control" type="text" placeholder="Seu nome">
                </div>

                <div class="form-group">
                    <label for="contato-email">E-mail:</label>
                    <div class="input-group">
                        <div class="input-group-addon">@</div>
                        <input id="contato-email" class="form-control" type="email" placeholder="Seu e-mail">
                    </div>
                </div>

                <div class="grupo-radio">
                    <div class="radio">
                        <label>
						<input type="radio" name="tipo-pessoa" value="fisica" checked>
						Pessoa física
					</label>
                    </div>

                    <div class="radio">
                        <label>
						<input type="radio" name="tipo-pessoa" value="juridica">
						Pessoa jurídica
					</label>
                    </div>
                </div>

	            <select class="contato-select form-control" name="tipo-solicitacao">
					<option value="" disabled selected>Tipo de solicitação</option>
					<option value="casa">Casa</option>
					<option value="apartamento">Apartamento</option>
					<option value="mansao">Mansão</option>
				</select>

                <button type="submit" class="btn btn-primary">Enviar</button>

            </form>
        </section>
    </div>
    <h1 class="title">BLOG</h1>

    <span class="postArea">

    	<?php 
    	if (have_posts()) : ?>

    		<?php 
    		while (have_posts()) : the_post(); ?>

    			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    			
    				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

    				<?php the_content('Read the rest of this entry &raquo;'); ?>

    				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
    			</div>

    		<?php 
    		endwhile; ?>

    		<div class="navigation">
    			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
    			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    		</div>

    	<?php 
    	else : ?>

    		<h2 class="center">Not Found</h2>
    		<p class="center">Sorry, but you are looking for something that isn't here.</p>
    		<?php get_search_form(); ?>

    	<?php 
    	endif; ?>
    </span>

<?php 
get_sidebar(); ?>

<?php 
get_footer(); ?>
