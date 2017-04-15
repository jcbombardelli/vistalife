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
        <footer>
            <div class="container row footer">
                <div class="menuBar col-md-7 col-xs-8">
                    <ul>
                        <li>Home</li>
                        <li>Como Funciona</li>
                        <li>Soluções</li>
                        <li>Blog</li>
                        <li>Diferenciais</li>
                        <li>Fale Conosco</li>
                    </ul>                    
                </div>
                <div class="col-md-5 col-xs-12">
                    <address>
                        <strong>TopCasaFina Arquitetura</strong><br>
                        Rua Vergueiro, 3185, Vila Mariana<br>
                        São Paulo, SP<br>
                        Tel: (11) 5571-2751 ou 5083-3884
                    </address>
                    <address>
                        E-mail: contato.topcasafina@alura.com.br
                    </address>
                </div>
            </div>
        </footer>
        <div class="disclaimer"></div>

    </body>

</html>