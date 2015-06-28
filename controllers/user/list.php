<?php
$muser = new Model_User;
$data = $muser->listall();
$title = "List user added";
require "views/user/list_view.php";