<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="application-name" content="">
    <meta name="msapplication-TileColor" content="">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-pd.jpg">
    <title>Portal do Projeto Pensando o Direito</title>

    <!-- styles gerais do portal -->
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">

    <!-- HTML5Shim e Respond.js oferecem suporte HTML5 e media queries para o IE8 -->
    <!-- AVISO: Respond.js não funciona localmente ("//file:...") -->
    <!--[if lt IE 9]>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class('internalcontent-mci'); ?>>

<!-- <div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px; display:block;" class="clearfix">
    <ul id="menu-barra-temp" style="list-style:none;">
        <li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED"><a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a>
        </li>
        <li><a style="font-family:sans,sans-serif; text-decoration:none; color:white;" href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a>
        </li>
    </ul>
</div> -->
<div class="header container clearfix">
    <div id="logo-principal">
        <a href="#">
            <h1>Portal do Projeto Pensando o Direito</h1>
        </a>
    </div>
    <div class="col-xs-8 clearfix pull-right">
        <div class="row">
            <div class="col-xs-12 text-right" id="ferramentas-acessibilidade">
                <a href="#" class="ml-md" title="Acessibilidade">Acessibilidade</a>
                <a href="#" class="ml-md" title="Aumentar fonte">A+</a>
                <a href="#" class="ml-md" title="Diminuir fonte">A-</a>
                <a href="#" class="ml-md" title="Alto contraste">C <i class="fa fa-caret-down"></i></a>
            </div>
            <div class="col-xs-8 mt-xs pull-right" id="busca">
                <div class="row">
                    <form role="search">
                        <div class="input-group busca-pd">
                            <input type="text" class="form-control" placeholder="Buscar no site" name="srch-term"
                                   id="srch-term">

                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Menu Principal -->
            <div class="col-xs-12" id="menu-principal">
                <div class="row">
                    <div class="navbar navbar-inverse" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                Expandir Menu <i class="fa fa-caret-square-o-down ml-xs"></i>
                            </button>
                        </div>
                        <!-- início do menu principal de navegação -->
                        <?php wp_nav_menu( array(   'theme_location' => 'menu-principal',
                                                    'container_class' => 'navbar-collapse collapse',
                                                    'menu_class' => 'nav navbar-nav navbar-right sm') ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="content-mci" class="container">
