<?php
$body_class = 'views_page';
$baseurl = "http://local.dev/php/app";
require "library/classdb.php";
require "library/functions.php";
if (isset($_GET['controller'])) {
	switch ($_GET['controller']) {
		case 'user':
			require "controllers/user/controller.php";
			break;

		case 'ajax':
			require "controllers/ajax/controller.php";
			break;

		case 'news':
			require "controllers/news/controller.php";
			break;

		case 'admin':
			require "controllers/admin/controller.php";
			break;
	}
} else {
	require "controllers/user/list.php";
}