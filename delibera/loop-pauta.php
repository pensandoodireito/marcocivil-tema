<?php if (have_posts()) :
    while (have_posts()) :
        the_post();
        $temas = wp_get_post_terms($post->ID, 'tema');

        $user_id = get_current_user_id();
        $situacao = delibera_get_situacao($post->ID);

        $seguir = false;
        if (!delibera_ja_seguiu($post->ID, $user_id) && $situacao->slug != 'relatoria') {
            $seguir = true;
        }
        ?>

<div class="topic">
  <div class="row mt-md divider-bottom">
    <div class="col-md-6">
      <div class="meta clearfix">
        <p class="status fontsize-sm text-muted pull-left">
          <i class="fa fa-users"></i>
          <?php echo delibera_get_situacao($post->ID)->name; ?></p>
        <p class="deadline fontsize-sm text-muted pull-left ml-lg">
          <i class="fa fa-calendar"></i>
          <?php if (delibera_get_prazo($post->ID) == -1) {
                        echo 'Prazo encerrado';
                    } else {
                        printf(_n('Encerra em um dia', 'Encerra em %1$s dias', delibera_get_prazo($post->ID), 'delibera'), number_format_i18n(delibera_get_prazo($post->ID)));
                    } ?>
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="meta text-right">
        <div class="btn-group">
          <button class="btn btn-default btn-sm dropdown-toggle red" type="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-chevron-down"></i>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li>
              <a href="" class="fontsize-sm text-muted"><i class="fa fa-facebook-square"></i> Facebook</a>
            </li>
            <li>
              <a href="" class="fontsize-sm text-muted"><i class="fa fa-twitter"></i> Twitter</a>
            </li>
            <li>
              <a href="" class="fontsize-sm text-muted"><i class="fa fa-google-plus"></i> Google+</a>
            </li>
            <li>
              <a href="#" class="fontsize-sm text-muted" id="delibera_seguir">
                <span id="delibera-seguir-text" <?php if (!$seguir) echo ' style="display: none;" ';?>><i class="fa fa-star-o"></i> Seguir</span>
                <span id="delibera-seguindo-text"  <?php if ($seguir) echo ' style="display: none;" ';?>><i class="fa fa-star red"></i> Seguindo</span>
              </a>
            </li>
            <li>
              <a href="?delibera_print=1" class="fontsize-sm text-muted"><i class="fa fa-print"></i> Imprimir</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <h4 class="red"><strong>
    <?php the_title(); ?>
    </strong></h4>
  <div class="mt-sm clearfix">
    <p class="meta fontsize-sm pull-left">Discussão criada por <strong class="author text-danger">
      <?php the_author(); ?>
      </strong> em <strong class="date text-danger">
      <?php the_date('d/m/y'); ?>
      </strong>
    </p>
    <?php if (!empty($temas)) : ?>
    <p class="meta fontsize-sm text-muted ml-lg pull-left">Tema:
      <a href="#">
        <?php $size = count($temas) - 1; ?>
        <?php foreach ($temas as $key => $tema) : ?>
        <a href="<?php echo get_post_type_archive_link('pauta') . "?tema_filtro[{$tema->slug}]=on"; ?>">
        <?php echo $tema->name; ?></a>
      <?php echo ($key != $size) ? ',' : ''; ?>
      <?php endforeach; ?>
    </p>
    <?php endif; ?>
  </div>
  <div class="content">
    <?php the_content(); ?>
  </div>
  <?php comments_template( '', true ); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>
