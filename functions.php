<?php
add_action( 'wp_head', 'marcocivil_meta_headers' );
/**
 * Função para incluir metas no header do marcocivil
 */
function marcocivil_meta_headers() {
    ?>
    <meta name="google-site-verification" content="XUlRiKgckbM8CvDw1o9A-anhRvEMgzeXK5yngPXmePo" />
<?php
}

add_action( 'add_meta_boxes', 'autor_exibicao_metabox' );
function autor_exibicao_metabox()
{
    add_meta_box( 'autor-exibicao-id', 'Autor de exibição', 'autor_exibicao_render', 'pauta', 'normal', 'high' );
}

function autor_exibicao_render($post)
{
    $autor_exibicao = get_post_meta($post->ID, '_autor_exibicao', true);

    wp_nonce_field( 'pauta_autor_exibicao_nonce', 'autor_exibicao_nonce' );

    ?>
    <label for="autor-exibicao">Nome do autor</label>
    <input type="text" name="autor_exibicao" id="autor-exibicao" value="<?php echo $autor_exibicao; ?>" />
<?php
}

add_action( 'save_post', 'autor_exibicao_save' );
function autor_exibicao_save( $post_id )
{
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['autor_exibicao_nonce'] ) || !wp_verify_nonce( $_POST['autor_exibicao_nonce'], 'pauta_autor_exibicao_nonce' ) ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;

    if (isset($_POST['autor_exibicao'])) {
        update_post_meta($post_id, '_autor_exibicao', $_POST['autor_exibicao']);
    }

}

add_action('wp_footer', 'marcocivil_anotacoes_sistematizacao');
function marcocivil_anotacoes_sistematizacao() {
    if ($_SERVER['QUERY_STRING'] == "anotar") { 
?>
    <script src="<?php echo ANOTATION_SERVER; ?>/embed.js"></script>
<?php
    }
}
