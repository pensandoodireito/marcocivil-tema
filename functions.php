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

//Adicionando campo de TAG nos comentários.
//Baseado em: http://wordpress.stackexchange.com/questions/82317/show-custom-comment-fields-when-editing-in-admin
// SAVE COMMENT META
// only found this hook to process the POST
add_filter( 'comment_edit_redirect',  'save_comment_wpse_82317', 10, 2 );

// META BOX
add_action( 'add_meta_boxes', 'add_custom_box_wpse_82317' );

/**
 * Save Custom Comment Field
 * This hook deals with the redirect after saving, we are only taking advantage of it
 */
function save_comment_wpse_82317( $location, $comment_id )
{
    // Not allowed, return regular value without updating meta
    if ( !wp_verify_nonce( $_POST['noncename_wpse_82317'], plugin_basename( __FILE__ ) ) 
        && !isset( $_POST['meta_comment_field'] ) 
        ) 
        return $location;

    // Convert text field into array splitted by comma
    $tags = array_map( 'trim', explode(',', $_POST['meta_tag_field']) ); 
    $tags = array_map( 'sanitize_text_field', $tags); 

    // Update meta
    update_comment_meta( 
        $comment_id, 
        'meta_tag_field', 
        implode(',', $tags) 
    );

    // Return regular value after updating  
    return $location;
}

/**
 * Add Comment meta box 
 */
function add_custom_box_wpse_82317() 
{
    add_meta_box( 
        'section_id_wpse_82317',
        __( 'Tags' ),
        'inner_custom_box_wpse_82317',
        'comment',
        'normal',
        'high'
    );
}

/**
 * Render meta box with Custom Field 
 */
function inner_custom_box_wpse_82317( $comment ) 
{
    // Use nonce for verification
    wp_nonce_field( plugin_basename( __FILE__ ), 'noncename_wpse_82317' );

    $c_meta = get_comment_meta( $comment->comment_ID, 'meta_tag_field', true );
    echo "<input type='text' id='meta_tag_field' name='meta_tag_field' value='", 
        esc_attr( $c_meta ), 
        "' size='25' />";
}
