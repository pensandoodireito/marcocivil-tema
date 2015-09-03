<?php get_header(); ?>
<div class="container">
    <div class="row mt-md">
        <div class="col-md-12">
            <h1 class="font-roboto red">Marco civil da internet</h1>
        </div>
    </div>
</div>
<div id="marcocivil-fases" class="mt-md">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-tabs-fases">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs topo" role="tab-fases">
                        <li role="fases-global"><a href="#fase-um" aria-controls="fase-um" role="tab"
                                                   data-toggle="tab">1ª Fase</a></li>
                        <li role="fases-global" class="active"><a href="#fase-dois" aria-controls="fase-dois"
                                                                  role="tab"
                                                                  data-toggle="tab">2ª Fase</a>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content content-complete">
                        <div role="tab-fases" class="tab-pane" id="fase-um">
                            tb 01
                        </div>
                        <div role="tab-fases" class="tab-pane active" id="fase-dois">
                            <div class="fase-dois-content">
                                <div class="container-fluid pt-md pb-md">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="fase-dois-top">
                                                <h1 class="font-roboto red pt-lg">Chegou a hora de debater o texto</h1>

                                                <p class="mt-md">O Marco Civil da Internet, Lei 12.965/14, estabelece
                                                    princípios, garantias,
                                                    direitos e deveres dos usuários da Internet no Brasil, sendo a
                                                    primeira
                                                    lei
                                                    construída de forma colaborativa entre Governo e sociedade
                                                    utilizando a
                                                    internet como plataforma de debate.</p>

                                                <p><a href="#" class="btn btn-danger btn-lg font-roboto mt-md"><strong>Participe
                                                    do debate!</strong></a></p>
                                            </div>
                                        </div>
                                        <div class="col-md-7 text-center">
                                            <a href="#"> <img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/debate-texto-001.png"
                                                    class="img-adptive"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="ultimos-comentarios divider-top mt-md">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="font-roboto red">Útimos comentários no texto</h2>

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae
                                                    accumsan ligula. Ut non pretium lectus. Quisque convallis velit eget
                                                    magna luctus elementum.</p>
                                            </div>
                                        </div>

                                        <div class="row ultimos-comentarios-estructure">
                                            <div class="col-md-12">
                                                <div class="comments-structure">
                                                    <div class="comments-main">
                                                        <div class="three-col">
                                                            <div class="comments-col">
                                                                <div class="comments-header">
                                                                    <p class="red"><strong><a href="#">Comentários sobre
                                                                        dados, estatísticas e monitoramento</a></strong>
                                                                    </p>
                                                                </div>
                                                                <ul class="list-group">
                                                                    <?php
                                                                        $listcomment = '';
                                                                        for($i=0;$i<3;$i++) {
                                                                        $listcomment .= "
                                                                   <li class='list-group-item'>
                                                                    <div class='comments-line'>
                                                                        <div class='comments-image'>
                                                                            <img src='http://localhost/marcocivil/wp-content/themes/marcocivil-tema/images/avatar.png'
                                                                                 height='32' width='32'>
                                                                        </div>
                                                                        <div class='comments-text'>
                                                                            <div class='comment-content'>
                                                                                <div class='comment-comment'>
                                                                                    <p><a href='#'> Ut eu justo ornare,
                                                                                        porttitor massa sit amet,
                                                                                        maximus libero. Praesent sit
                                                                                        amet leo vulputate, rutrum
                                                                                        tellus nec, tincidunt neque.
                                                                                        Donec sollicitudin ligula neque,
                                                                                        quis lobortis turpis mollis
                                                                                        sed. Lorem ipsum dolor sit
                                                                                        amet, consectetur adipiscing
                                                                                        elit. Nam vitae accumsan ligula.
                                                                                        Ut non pretium lectus. Quisque
                                                                                        convallis velit eget magna
                                                                                        luctus elementum. Pellentesque
                                                                                        habitant morbi tristique
                                                                                        senectus et netus et malesuada
                                                                                        fames ac turpis egestas.
                                                                                        Pellentesque feugiat scelerisque
                                                                                        gravida.</a></p>
                                                                                </div>
                                                                                <div class='comments-mic-info'>
                                                                                    <p>
                                                                                        <small>Moises <span
                                                                                                class='ml-md'><i
                                                                                                class='fa fa-clock-o'></i> em 8/07/2015</span>
                                                                                        </small>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </li>
                                                                    "
                                                                    ;}
                                                                    echo $listcomment;
                                                                    ?>
                                                                </ul>
                                                            </div>
                                                            <div class="comments-col">
                                                                <div class="comments-header">
                                                                    <p class="red"><strong><a href="#">Comentários sobre
                                                                        dados, estatísticas e monitoramento</a></strong>
                                                                    </p>
                                                                </div>
                                                                <ul class="list-group">
                                                                    <?php
                                                                        $listcomment = '';
                                                                        for($i=0;$i<3;$i++) {
                                                                        $listcomment .= "
                                                                   <li class='list-group-item'>
                                                                    <div class='comments-line'>
                                                                        <div class='comments-image'>
                                                                            <img src='http://localhost/marcocivil/wp-content/themes/marcocivil-tema/images/avatar.png'
                                                                                 height='32' width='32'>
                                                                        </div>
                                                                        <div class='comments-text'>
                                                                            <div class='comment-content'>
                                                                                <div class='comment-comment'>
                                                                                    <p><a href='#'> Ut eu justo ornare,
                                                                                        porttitor massa sit amet,
                                                                                        maximus libero. Praesent sit
                                                                                        amet leo vulputate, rutrum
                                                                                        tellus nec, tincidunt neque.
                                                                                        Donec sollicitudin ligula neque,
                                                                                        quis lobortis turpis mollis
                                                                                        sed. Lorem ipsum dolor sit
                                                                                        amet, consectetur adipiscing
                                                                                        elit. Nam vitae accumsan ligula.
                                                                                        Ut non pretium lectus. Quisque
                                                                                        convallis velit eget magna
                                                                                        luctus elementum. Pellentesque
                                                                                        habitant morbi tristique
                                                                                        senectus et netus et malesuada
                                                                                        fames ac turpis egestas.
                                                                                        Pellentesque feugiat scelerisque
                                                                                        gravida.</a></p>
                                                                                </div>
                                                                                <div class='comments-mic-info'>
                                                                                    <p>
                                                                                        <small>Moises <span
                                                                                                class='ml-md'><i
                                                                                                class='fa fa-clock-o'></i> em 8/07/2015</span>
                                                                                        </small>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </li>
                                                                    "
                                                                    ;}
                                                                    echo $listcomment;
                                                                    ?>
                                                                </ul>
                                                            </div>
                                                            <div class="comments-col">
                                                                <div class="comments-header">
                                                                    <p class="red"><strong><a href="#">Comentários sobre
                                                                        dados, estatísticas e monitoramento</a></strong>
                                                                    </p>
                                                                </div>
                                                                <ul class="list-group">
                                                                    <?php
                                                                        $listcomment = '';
                                                                        for($i=0;$i<3;$i++) {
                                                                        $listcomment .= "
                                                                   <li class='list-group-item'>
                                                                    <div class='comments-line'>
                                                                        <div class='comments-image'>
                                                                            <img src='http://localhost/marcocivil/wp-content/themes/marcocivil-tema/images/avatar.png'
                                                                                 height='32' width='32'>
                                                                        </div>
                                                                        <div class='comments-text'>
                                                                            <div class='comment-content'>
                                                                                <div class='comment-comment'>
                                                                                    <p><a href='#'> Ut eu justo ornare,
                                                                                        porttitor massa sit amet,
                                                                                        maximus libero. Praesent sit
                                                                                        amet leo vulputate, rutrum
                                                                                        tellus nec, tincidunt neque.
                                                                                        Donec sollicitudin ligula neque,
                                                                                        quis lobortis turpis mollis
                                                                                        sed. Lorem ipsum dolor sit
                                                                                        amet, consectetur adipiscing
                                                                                        elit. Nam vitae accumsan ligula.
                                                                                        Ut non pretium lectus. Quisque
                                                                                        convallis velit eget magna
                                                                                        luctus elementum. Pellentesque
                                                                                        habitant morbi tristique
                                                                                        senectus et netus et malesuada
                                                                                        fames ac turpis egestas.
                                                                                        Pellentesque feugiat scelerisque
                                                                                        gravida.</a></p>
                                                                                </div>
                                                                                <div class='comments-mic-info'>
                                                                                    <p>
                                                                                        <small>Moises <span
                                                                                                class='ml-md'><i
                                                                                                class='fa fa-clock-o'></i> em 8/07/2015</span>
                                                                                        </small>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </li>
                                                                    "
                                                                    ;}
                                                                    echo $listcomment;
                                                                    ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <p><a href="#"
                                                                          class="btn btn-danger btn-md font-roboto mt-md"><strong>Participe
                                                    do debate!</strong></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tutorial-debate divider-top">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1 class="red font-roboto">Como comentar no texto:</h1>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-sm-4 text-center">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tuto-segunda-fase-001.png"
                                                                 class="img-adptive"
                                                                 alt="">
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <h3 class="font-amatic text-light-blue mt-lg">Escolha o
                                                                parágrafo</h3>
                                                            <p>O símbolo na lateral superior direita indica que o
                                                                parágrafo pode ser coementado;</p>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-lg">
                                                        <div class="col-sm-7 text-right">
                                                            <h3 class="font-amatic text-light-blue mt-lg">Se já for
                                                                cadastrado</h3>
                                                            <p>Se você já possui o cadastro no site, aparecerá um campo
                                                                para que você insira seu conentário;</p>
                                                        </div>
                                                        <div class="col-sm-4 text-center">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tuto-segunda-fase-002.png"
                                                                 class="img-adptive"
                                                                 alt="">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-lg">
                                                        <div class="col-sm-4 text-center">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tuto-segunda-fase-003.png"
                                                                 class="img-adptive"
                                                                 alt="">
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <h3 class="font-amatic text-light-blue mt-lg">Veja outros
                                                                comentários</h3>
                                                            <p>Basta clicar no símbolo na lateral superior direita: ele
                                                                indica que o parágrafo possui comentários de outras
                                                                pessoas.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="back-to-top">
    <a href="#" class="white"><i class="fa fa-level-up"></i> Voltar para o topo</a>
</div>
<?php get_template_part('front','noticias'); ?>
<?php get_template_part('mini-tutorial'); ?>
<?php get_footer(); ?>