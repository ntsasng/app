<?php
$error = "";
$title = "Edit info user";
$muser = new Model_User;
$id = $_GET['uid'];
$u = $p = "";
if (isset($_POST['edit_user'])) {
	if ($_POST['txtuser'] == NULL) {
		$error[] = "Please input your username";
	} else {
		$u = $_POST['txtuser'];
	}
	if ($_POST['txtpass'] != $_POST['txtrepass']) {
		$error[] = "Password not match";
	} else {
		if ($_POST['txtpass'] != "") {
			$p = $_POST['txtpass'];
		} else {
			$p = "none";
		}
	}
	$l = $_POST['level'];
	if ( $u && $p && $l ) {
		$muser->setUsername($u);
		$muser->setPassword($p);
		$muser->setLevel($l);
		if ( $muser->checkUsername($id) == true ) {
			$muser->updateUser($id);
			redirect("$baseurl/user/list");
		} else {
			$error[] = "Your user name has been registed";
		}
		
	}
}
$data = $muser->getUserById ( $id );
require "views/user/edit_view.php";