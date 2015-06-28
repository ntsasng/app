<?php
$id = $_GET['id'];
$muser = new Model_User;
$data = $muser->getUserByLevel( $id );
require "views/user/list_sort_user.php";