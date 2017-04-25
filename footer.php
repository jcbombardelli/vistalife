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
            <div class="row footer">
                <div class="menuBar col-md-7 col-xs-8">
                    <ul>
                        <li><h3>VistaLife - Planejamento Financeiro</h3></li>
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
        <div class="disclaimer-background">
            <div class="disclaimer">
                A Vista Life está empenhada em oferecer informações de valor aos investidores e aos que desejam cuidar melhor de seu patrimônio. Tem como objetivo estimular o aprendizado e a discussão, para que as pessoas consigam tomar decisões com mais consciência e segurança. 

                Entre os temas abordados estão os investimentos em si (renda fixa, ações, ativos imobiliários, fundos, previdência, etc.), a administração financeira pessoal e familiar, a gestão de riscos, o planejamento de aposentadoria, o planejamento tributário e o planejamento sucessório. Também terão vez os assuntos relacionados à macroeconomia (inflação, juros, desemprego, etc.) e ao ambiente político.

                A Vista Life dá muita importância para que as informações sejam transmitidas com qualidade, isenção e linguagem fácil, observando, no entanto, que não faz qualquer tipo de recomendação, indicação e/ou aconselhamento de investimento, não se responsabilizando por perdas, danos, custos e lucros cessantes.
            </div>
        </div>

    </body>

</html>