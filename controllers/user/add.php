<?php
$error = "";
if (isset($_POST['add_user'])) {
	$u = $p = "";
	if ( $_POST['txtuser'] == NULL ) {
		$error[] = "Please input your username";
	} else {
		$u = $_POST['txtuser'];
	}
	if ( $_POST['txtpass'] == NULL ) {
		$error[] = "Please input your password";
	} else {
		if ( $_POST['txtpass'] != $_POST['txtrepass']) {
			$error[] = "Password not match";
		} else {
			$p = $_POST['txtpass'];
		}
	}
	$l = $_POST['level'];

	if ( $u && $p && $l ) {
		$muser = new Model_User;
		$muser->setUsername($u);
		$muser->setPassword($p);
		$muser->setLevel($l);
		if ( $muser->checkUsername() ) {
			$muser->insertUser();
			redirect("$baseurl/user/list");
		} else {
			$error[] = "Username has been registed";
		}
		
	}
}
$title = "Add new user";
require "views/user/add_view.php";