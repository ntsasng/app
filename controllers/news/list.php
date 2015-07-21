<?php
$mnews = new Model_News;
$data = $mnews->listNews();
$title = 'List news has added';
require 'views/news/list_view.php';
