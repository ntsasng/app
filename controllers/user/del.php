<?php
$id = $_GET['uid'];
$muser = new Model_User;
$muser->deleteUser( $id );
redirect("$baseurl/user/list");