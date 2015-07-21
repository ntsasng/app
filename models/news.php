<?php
class Model_News extends Database {
	
	protected $_news_title;
	protected $_news_desc;
	protected $_news_full;

	function __construct() {
		$this->connect();
	}

	function setNewstitle ( $news_title ) {
		$this->_news_title = $news_title;
	}

	function getNewstitle () {
		return $this->_news_title;
	}

	function setNewsdesc ( $news_desc ) {
		$this->_news_desc = $news_desc;
	}

	function getNewsdesc () {
		return $this->_news_desc;
	}

	function setNewsfull ( $news_full ) {
		$this->_news_full = $news_full;
	}

	function getNewsfull () {
		return $this->_news_full;
	}

	function insertNews () {
		$sql = "INSERT INTO tbl_news (news_title, news_desc, news_full) VALUES ( '" . $this->getNewstitle() . "', '" . $this->getNewsdesc() . "', '" . $this->getNewsfull() . "')";
		$this->query( $sql );
	}

	function delNews ( $id ) {
		$sql = "DELETE * FROM tbl_news WHERE id='$id";
		$this->query( $sql );
	}

	function listNews () {
		$sql = "SELECT * FROM tbl_news ORDER BY id DESC";
		$this->query( $sql );
		return $this->fetchall();
	}
}