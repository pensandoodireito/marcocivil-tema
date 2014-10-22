<?php

add_action( 'init', 'register_menu_principal' );
function register_menu_principal() {
    register_nav_menu('menu-principal', 'Menu Principal' );
}

