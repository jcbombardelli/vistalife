<?php
/**
 * @package WordPress
 * @subpackage YOUR_THEME
 */
?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php bloginfo('template_path'); ?>/inc/js/libs/jquery-1.8.1.min.js"><\/script>')</script>

        <script src="<?php bloginfo('template_url'); ?>/inc/js/main.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

        <?php wp_footer(); ?>
        <div class="disclaimer"></div>
        <footer>
            <div class="row footer">
                <div class="menuBar col-md-7 col-xs-8">
                    <ul>
                        <li><h3>VistaLife - Planejamento Financeiro</h4></li>
                        <li><a href="/">Home</a></li>
                        <li><a data-scroll href="<?=$linkPath?>#funcionamento">Como Funciona</a></li>
                        <li><a data-scroll href="<?=$linkPath?>#ourPlanning">Nosso Planejamento</a></li>
                        <li><a data-scroll href="<?=$linkPath?>#nossos-diferenciais">Diferenciais</a></li>
                        <li><a data-scroll href="<?=$linkPath?>#blog">Blog</a></li>
                        <li><a data-scroll href="<?=$linkPath?>#contact-form">Contato</a></li>
                    </ul>                    
                </div>
                <div class="menuBar col-md-5 col-xs-12">
                    <div>
                        <h3 class="center">ASSINE NOSSA NEWSLETTER</h3>
                    </div>
                    <span class="center">
                        <form action="https://brunogeronimo.us5.list-manage.com/subscribe/post" method="POST">
                            <input name="u" value="784fb3e969cfb0aac81ad2971" type="hidden">
                            <input name="id" value="ed50d59977" type="hidden">
                            <input type="email" name="MERGE0" placeholder="Digite seu e-mail">
                            <input class="btn btn-blue" type="submit" value="Enviar">
                        </form>
                        <div class="center">
                            <div class="center">
                                <label>Telefone: (11) 3087-9170</label>
                            </div>
                            <div class="center">
                                <a href="mailto:falecom@vistalife.com.br">falecom@vistalife.com.br</a>
                            </div>
                        </div>
                    </span>
                </div>
               <!--  <div class="col-md-4 col-xs-5">
                    <div class="center">
                    </div>
                    <div class="center">
                    </div>
                </div> -->
            </div>
        </footer>

    </body>

</html>