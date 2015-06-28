<?php
function __autoload ( $url ) {
	$name = str_replace( "_", "/", $url );
	$name = str_replace( "Model", "Models", $name );
	$real_url = strtolower( $name );
	require "$real_url.php";
}

function redirect ( $url ) {
	header("location: $url");
	exit();
}