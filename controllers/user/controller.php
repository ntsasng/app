<?php
if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'add':
			require "controllers/user/add.php";
			break;
		case 'edit':
			require "controllers/user/edit.php";
			break;
		case 'list':
			require "controllers/user/list.php";
			break;
		case 'del':
			require "controllers/user/del.php";
			break;
		default:
			break;
	}
} else {
	require 'list.php';
}