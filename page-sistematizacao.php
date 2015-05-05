<?php get_header(); ?>
<div class="container">
    <h2 class="font-roboto red">Sistematização do Marco Civil</h2>
</div>
<div id="sistematizacao">
    <div class="sist-top">
        <div class="sist-base">
            <div class="container sist-content">
                <div class="sist-logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sistematizacao-marcocivil.png" class="img-adptive"
                    alt="Logo: Marco Civil da Internet">
                </div>
                <div class="sist-menu col-md-offset-6 col-md-5">
                    <ul class="list-unstyled">
                        <li><a href="#">O que é sistematização?</a></li>
                        <li><a href="#">Como participar?</a></li>
                        <li><a href="#">Ferramentas de colaboração</a></li>
                        <li><a href="#">Eixos do debate</a></li>
                        <li><a href="#">Envie seu decreto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="oque clearfix mt-lg">
            <div class="ml-md col-md-6">
                <h2 class="font-roboto red h1">O que é?</h2>
                <p>Depois de três meses de debate sobre a regulamentação do Marco Civil da Internet, é hora de sistematizar as opiniões enviadas pela plataforma on-line e elaborar uma minuta do texto do decreto. </p>
                <p>E a Secretaria de Assuntos Legislativos (SAL) do Ministério da Justiça (MJ) abre mais uma vez espaço para a participação social. Qualquer pessoa, instituição, empresa ou órgão governamental pode mandar sua proposta.</p>
            </div>
            <div class="col-md-5 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cubo.jpg" class="img-adptive"
                alt="Logo: Marco Civil da Internet">
            </div>
        </div>
    </div>
    <div class="comoparticipar">
        <div class="container">
            <div class="row">
                <div class="ml-md col-md-6">
                    <h2 class="font-roboto red h1">Como participar</h2>
                    <p class="mt-md">Procure qualificar o texto com bons argumentos. Opiniões com maior adesão não necessariamente estarão na versão final do Ministério da Justiça nem precisam ser consideradas pelo proponente da sistematização. </p>
                    <p>As propostas de texto devem ser feitas a partir das contribuições recebidas durante o debate público on-line e conter justificativas das escolhas do texto. As sugestões de decreto serão recebidas até 31 de maio pelo botão abaixo. O material enviado poderá ser disponibilizado nesta página depois dessa data.</p>
                    <p>Para auxiliar a produção das propostas, disponibilizamos abaixo um modelo de estrutura de decreto, além de normas relevantes.</p>
                </div>
                <div class="col-md-5 menu-participar">
                    <ul class="list-unstyled">
                        <li>
                            <a href="http://participacao.mj.gov.br/marcocivil/wp-content/uploads/sites/2/2015/05/pautas-comentarios.zip" class="red">Download do histórico</a>
                            <p><small>Eixos, comentários etc ( em fomato “.cvs”)</small></p>
                        </li>
                        <li><a href="#">Histórico online</a></li>
                        <li><a href="#">Envie seu decreto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ferr-cont">
        <div class="container">
            <h2 class="font-roboto red h1 mb-md">Ferramentas de contribuição</h2>
            <p>Para ajudar no processo de sistematização, existem algumas ferramentas de colaboração para você compartilhar suas ideias com outras pessoas. </p>
            <p>Sugerimos aqui algumas delas e disponibilizamos tutoriais de como usá-las com as contribuições do debate para a regulamentação do Marco Civil da Internet. </p>
            <p>O uso dessas ferramentas é opcional, sendo apenas uma sugestão para facilitar o processo aos proponentes.</p>
            <div class="row divider-top">
                <div class="col-md-6 text-center">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/e1Ujob2uHss?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <h4 class="font-roboto red">Hypothes.is</h4>
                    <p class="mt-sm"><small><a href="https://hypothes.is/" target="_blank">hypothes.is</a></small></p>
                    <p>É uma plataforma para discussão. Permite postar comentários a cada frase de outro membro da equipe e fazer anotações em qualquer tipo de conteúdo.</p>
                </div>
            </div>
            <div class="row divider-top">
                <div class="col-md-6 text-center">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/BUw9Xu8yhRU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <h4 class="font-roboto red">Pad</h4>
                    <p class="mt-sm"><small><a href="http://pad.w3c.br/p/sistematizacao-marcocivil">pad.w3c.br</a></small></p>
                    <p>Essa ferramenta sincroniza os textos conforme você digita, de modo que todos com acesso à página vejam a mesma coisa.
                        <p>Se você quiser divulgar o seu pad, use o este link: xxxxxxxxx</p>
                        <p>Caso queira sugerir novas ferramentas que possam auxiliar no processo envie sua sugestão para debatemarcocivil@mj.gov.br</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="eixos">
        <div class="container">
            <h4 class="font-roboto red h1">Eixos</h4>
            <div class="row">
                <?php
                $temas = get_terms( 'tema', 'orderby=id&hide_empty=0' );
                foreach($temas as $tema): ?>
                <div class="col-sm-3 text-center">
                    <a href="<?php echo get_term_link($tema); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/temas/<?php echo $tema->slug; ?>.png"
                    class="img-adptive" alt=""></a>
                    <h5 class="font-roboto blue"><strong>
                    <a href="<?php echo get_term_link($tema); ?>"><?php echo $tema->name; ?></a>
                    </strong></h5>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="confira text-center">
                    <div class="col-md-6">
                        <p class="h4"><a href="http://participacao.mj.gov.br/marcocivil/wp-content/uploads/sites/2/2015/05/pautas-comentarios.zip" class="red font-roboto"><strong>Download do histórico do debate<strong></a></p>
                        <p><small>Eixos, comentários etc ( em fomato “.cvs”)</small></p>
                    </div>
                    <div class="col-md-5 divider-left">
                        <p class="h4"><a href="#" class="red font-roboto"><strong>Veja todo o histórico do debate online<strong></a></p>
                        <p><small>Confira como foi a interação na plataforma</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="envie">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="font-roboto red h1">Envie seu decreto e justificativas</h4>
                    <p>Aqui você faz o upload da sua proposta de decreto para regulamentar o Marco Civil da Internet.</p>
                    <p>As contribuições poderão ser usadas como subsídio para a versão final do Ministério a ser encaminhado para a deliberação da Presidência da República.
                </div>
                <div class="col-md-6">
                    <div class="form-envie">
                        <?php
                        the_post();
                        the_content();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>