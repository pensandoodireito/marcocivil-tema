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
                    <p>O Marco Civil da Internet, Lei 12.965/14, que estabelece princípios, garantias, direitos e deveres dos
                        usuários da Internet no Brasil, é uma lei construída de forma colaborativa entre Governo e sociedade
                        utilizando a internet como plataforma de debate.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="temas clearfix">
            <div class="col-sm-4">
                <?php get_template_part('menu', 'vertical'); ?>
                <div class="mt-xl text-center">
                    <button type="button" class="btn btn-danger btn-lg font-roboto">Participe do debate!</button>
                </div>
            </div>
            <div class="col-sm-8">
                <?php
                $temas = get_terms( 'tema', 'orderby=id&hide_empty=0' );
                foreach($temas as $tema): ?>
                <div class="clearfix mt-lg">
                    <div class="col-sm-3 text-center">
                        <a href="<?php echo get_term_link($tema); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/temas/<?php echo $tema->slug; ?>.jpg"
                        class="img-adptive" alt=""></a>
                    </div>
                    <div class="col-sm-8">
                        <h4 class="font-amatic blue">
                            <a href="<?php echo get_term_link($tema); ?>"><?php echo $tema->name; ?></a>
                        </h4>
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
                <p>O Marco Civil da Internet, Lei 12.965/14, estabelece princípios, garantias, direitos e deveres dos
                usuários da Internet no Brasil, sendo a primeira lei construída de forma colaborativa entre Governo e
                sociedade utilizando a internet como plataforma de debate.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rutrum, lacus vitae eleifend aliquet, leo
                lacus consequat elit, sed sollicitudin mauris massa vel erat. </p>
                <p>Quisque ultricies laoreet orci. Etiam eros elit, consectetur a enim nec, dapibus placerat neque. Duis sed
                erat urna. Fusce auctor elit vitae massa posuere tempor. Nunc elementum sollicitudin felis sed euismod.
                Nam vulputate, arcu porta pretium lacinia, est lorem gravida massa, ac faucibus quam neque nec dui. Duis
                accumsan rutrum dolor, a lacinia erat gravida non</p>
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
