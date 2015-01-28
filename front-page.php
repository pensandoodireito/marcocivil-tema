<?php get_header(); ?>
<div class="conteudo" id="marco-civil">
    <div class="container">
        <div class="apresenta-protecao">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/marcocivil-w.png" class="img-adptive"
                    alt="Logo: Marco Civil da Internet">
                </div>
                <div class="col-md-8 white">
                    <h2 class="font-amatic">O que é?</h2>
                    <p>O Marco Civil da Internet, Lei 12.965 de 23 de abril de 14, que estabelece princípios, garantias, direitos e deveres dos
                    usuários da Internet no Brasil, é uma lei construída de forma colaborativa entre Governo e sociedade
                    utilizando a internet como plataforma de debate.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="temas clearfix">
            <div class="col-sm-4">
                
                <div class="menu-home">
                    <?php get_template_part('menu', 'vertical'); ?>
                    <div class="base">&nbsp;</div>
                </div>
                <div class="mt-xl text-center">
                    <a href="<?php echo pensando_get_participe_link(); ?>" class="btn btn-danger btn-lg font-roboto">Participe do debate!</a>
                </div>
                
            </div>
            <div class="col-sm-8">
                <div class="mt-lg">
                    <h3 class="font-amatic red text-center"><strong>Eixos</strong></h3>
                    <p class="ml-lg mr-lg fontsize-lg"><strong>Esses são os eixos dentro dos quais o debate
                        acontecerá. Lembre-se de postar os comentários no eixo e na pauta correta para aumentar
                        a sua relevância para o debate.</strong></p>
                </div>
                <?php
                $temas = get_terms( 'tema', 'orderby=id&hide_empty=0' );
                foreach($temas as $tema): ?>
                <div class="clearfix mt-lg">
                    <div class="col-sm-3 text-center">
                        <a href="<?php echo get_term_link($tema); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/temas/<?php echo $tema->slug; ?>.png"
                        class="img-adptive" alt=""></a>
                    </div>
                    <div class="col-sm-8">
                        <h4 class="font-amatic blue"><strong>
                        <a href="<?php echo get_term_link($tema); ?>"><?php echo $tema->name; ?></a>
                        </strong></h4>
                        <p>
                        <?php
                        if (function_exists('delibera_get_tema_excerpt')) {
                        echo delibera_get_tema_excerpt($tema->term_id);
                        }
                        ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="detalhes-marco white">
            <div class="col-md-8">
                <h3 class="font-amatic">Conheça mais sobre a Lei</h3>
                <p>A Lei está pautada em três pilares essenciais: neutralidade de rede, liberdade de expressão e privacidade dos usuários. Durante toda a tramitação do projeto, os mais diferentes pontos de vista foram considerados provocando grande debate nacional. </p>

                 <p>   O texto resultante foi elogiado por especialistas brasileiros e estrangeiros, resultando em uma abordagem que busca definir direitos e deveres, sem apenas criminalizar condutas na rede.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-comp.jpg" class="img-adptive" alt="">
            </div>
        </div>
    </div>
</div>
<?php get_template_part('mini-tutorial'); ?>
<?php get_template_part('noticias'); ?>
<?php get_footer(); ?>