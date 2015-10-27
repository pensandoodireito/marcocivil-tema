<?php
get_header();
$situacao = delibera_get_situacao( get_the_ID() );
?>

<div class="conteudo" id="marco-civil">
	<div class="container">
		<div class="situacao-<?php echo $situacao->slug; ?> clearfix">
			<?php

			load_template( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'loop-pauta.php', true );

			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
