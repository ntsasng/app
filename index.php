<?php
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
	}
} else {
	require "controllers/main.php";
}