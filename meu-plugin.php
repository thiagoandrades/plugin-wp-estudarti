<?php 
/*
Plugin Name: Plugin EstudarTI - Meu Plugin
Plugin URI: http://thiagoandrade.me/plugins
Description: Descricao do Plugin Tutorial do Adam Silva - Estudar TI
Version: 0.0.1
Author: Thiago Andrade
Author URI: http://thiagoandrade.me/
License: GPLv2 or later
*/


function mp_mensagem_post( $mp_post ) {
	$mp_mensagem = "Esta mensagem será mostrada no início de cada post";
	$mp_resultado = "<h1>$mp_mensagem"</h1>;
	$mp_resultado .= $mp_post;

return $mp_resultado;
}

add_filter( 'the_content', 'mp_mensagem_post' );