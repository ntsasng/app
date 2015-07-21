<?php
$error = "";
if ( isset( $_POST['add_news']) ) {
	$title = $desc = $full = "";
	if ( $_POST['txtnews_title'] == NULL ) {
		$error[] = "Please input your title";
	} else {
		$title = $_POST['txtnews_title'];
	}
	$desc = $_POST['txtnews_desc'];
	$full = $_POST['txtnews_full'];
	if ( $title ) {
		$mnews = new Model_News;
		$mnews->setNewstitle( $title );
		$mnews->setNewsdesc( $desc );
		$mnews->setNewsfull( $full );
		$mnews->insertNews();
		redirect("$baseurl/news/list");
	}
}
$title = 'Add news page';
require 'views/news/add_view.php';