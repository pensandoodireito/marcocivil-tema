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

					<p>O Marco Civil da Internet, Lei 12.965 de 23 de abril de 14, que estabelece princípios, garantias,
						direitos e deveres dos
						usuários da Internet no Brasil, é uma lei construída de forma colaborativa entre Governo e
						sociedade
						utilizando a internet como plataforma de debate.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="temas clearfix">
			<div class="col-md-4">
				<div class="menu-home">
					<?php get_template_part( 'menu', 'vertical' ); ?>
				</div>
			</div>
			<div class="col-md-8 text-center pt-lg pr-lg pb-lg pl-lg">
				<div class="mt-md">
					<h4 class="font-roboto red"><strong>Sistematização do Debate</strong></h4>

					<p>Depois de três meses de debate sobre a regulamentação do Marco Civil da Internet, é hora de
						sistematizar as opiniões enviadas pela plataforma on-line e elaborar uma minuta do texto do
						decreto.
						As contribuições poderão ser usadas como subsídio para a versão final do Ministério a ser
						encaminhado para a deliberação da Presidência da República.</p>
				</div>
				<div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sistematizacao-marcocivil.png"
					     class="img-adptive"
					     alt="Logo: Sistematização do Marco Civil da Internet">
				</div>
				<div class="mt-md">
					<a href="<?php echo get_site_url(); ?>/sistematizacao" class="btn btn-danger btn-lg font-roboto">Participe
						da Sistematização!</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="detalhes-marco white">
			<div class="col-md-8">
				<h3 class="font-amatic">Conheça mais sobre a Lei</h3>

				<p>A Lei está pautada em três pilares essenciais: neutralidade de rede, liberdade de expressão e
					privacidade dos usuários. Durante toda a tramitação do projeto, os mais diferentes pontos de vista
					foram considerados provocando grande debate nacional. </p>

				<p> O texto resultante foi elogiado por especialistas brasileiros e estrangeiros, resultando em uma
					abordagem que busca definir direitos e deveres, sem apenas criminalizar condutas na rede.</p>
			</div>
			<div class="col-md-4 text-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-comp.jpg" class="img-adptive"
				     alt="">
			</div>
		</div>
	</div>
</div>
<?php get_template_part( 'front', 'noticias' ); ?>
<?php get_footer(); ?>
