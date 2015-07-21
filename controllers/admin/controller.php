<?php
if ( isset( $_GET['action'] ) ) {
	switch ( $_GET['action'] ) {
		case 'add':
			require 'controllers/admin/add.php';
			break;
		case 'del':
			require 'controllers/admin/del.php';
			break;
		case 'list':
			require 'controllers/admin/list.php';
			break;
		case 'edit':
			require 'controllers/admin/edit.php';
			break;
		default:
			break;
	}
} else {
	require 'controllers/news/list.php';
}