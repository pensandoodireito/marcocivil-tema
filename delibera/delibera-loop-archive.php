<?php
  global $wp_query;

  //Verifica se há alguma mudança no filtro de pautas por página
  if (isset($_REQUEST['number-options'])) {
      // adiciona posts por página aos argumentos da query
      $wp_query->set('posts_per_page', $_REQUEST['number-options']);
  }

  //verifica se há algum 'filtro' do título da pauta
  if (isset($_REQUEST['filter_pauta'])) {
      $wp_query->set('s', $_REQUEST['filter_pauta']);
  }

  // realiza a query
  query_posts( $wp_query->query_vars );

  if (have_posts()) :
    while (have_posts()) :
      the_post();
      $temas = wp_get_post_terms($post->ID, 'tema');
      $situacao = delibera_get_situacao($post->ID);
?>

<div class="topic divider-bottom pb-md mt-md">
  <div class="clearfix mb-0">
    <p class="status pull-left fontsize-sm text-muted">
      <i class="fa fa-users"></i>
      <?php echo $situacao->name; ?>
    </p>
    <p class="deadline pull-left ml-lg fontsize-sm text-muted">
      <i class="fa fa-calendar"></i>
      <?php if (delibera_get_prazo($post->ID) == -1) {
            echo 'Prazo encerrado';
            } else {
            printf(_n('Encerra em um dia', 'Encerra em %1$s dias', delibera_get_prazo($post->ID), 'delibera'), number_format_i18n(delibera_get_prazo($post->ID)));
            } ?>
    </p>
    <p class="meta fontsize-sm ml-lg text-muted pull-left">Tema:
        <?php $size = count($temas) - 1; ?>
        <?php foreach ($temas as $key => $tema) : ?>
        <a href="<?php echo get_post_type_archive_link('pauta') . "?tema_filtro[{$tema->slug}]=on"; ?>">
        <?php echo $tema->name; ?></a>
      <?php echo ($key != $size) ? ',' : ''; ?>
      <?php endforeach; ?>
    </p>
  </div>
  <p class="h5 mt-0">
    <strong>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
      <?php the_title(); ?>
    </a>
    </strong>
  </p>
  <p>
    <?php the_excerpt(); ?>
  </p>
  <?php if (!empty($temas)) : ?>
  <?php endif; ?>
  <div class="clearfix mt-0">
    <p class="meta fontsize-sm pull-left">Criada por <strong class="author text-danger">
      <?php
        $autor_exibicao = get_post_meta(get_the_ID(), '_autor_exibicao', true);

        if (isset($autor_exibicao) && $autor_exibicao != "") {
            echo $autor_exibicao;
        } else {
            the_author();
        }
      ?>
      </strong> em <strong class="date text-danger"><?php echo get_the_date('d/m/y'); ?></strong>
    </p>
    <?php $label = delibera_get_comments_count_by_type($post->ID); ?>
    <?php if ($label) : ?>
    <p class="pull-left ml-lg fontsize-sm text-muted"><i class="fa fa-comments-o"></i>
      <a href="<?php the_permalink(); ?>#comments"><?php echo $label; ?></a>
    </p>
    <?php endif; ?>
    <?php if (in_array($situacao->slug, array('emvotacao', 'discussao', 'validacao'))) : ?>
    <p class="pull-left fontsize-sm ml-lg">
      <a href="#"><i class="fa fa-comment"></i></a>
        <a href="<?php the_permalink() ?>">
        <?php echo delibera_get_situation_button($post->ID); ?></a>
    </p>
    <?php endif; ?>
  </div>
</div>
<?php
        endwhile;
        endif; ?>
