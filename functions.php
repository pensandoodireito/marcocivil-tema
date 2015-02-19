<?php
/**
 * Função para incluir metas no header do marcocivil
 */
function marcocivil_meta_headers() {
    ?>
    <meta name="google-site-verification" content="XUlRiKgckbM8CvDw1o9A-anhRvEMgzeXK5yngPXmePo" />
<?php
}

add_action( 'wp_head', 'marcocivil_meta_headers' );
