<?php
if ( isset( $_GET['action'] ) ) {
	switch ( $_GET['action'] ) {
		case 'add':
			require 'controllers/news/add.php';
			break;
		case 'del':
			require 'controllers/news/del.php';
			break;
		case 'list':
			require 'controllers/news/list.php';
			break;
		case 'edit':
			require 'controllers/news/edit.php';
			break;
		default:
			break;
	}
} else {
	require 'controllers/news/list.php';
}