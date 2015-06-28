<?php
error_reporting(E_ALL ^ E_DEPRECATED);
class Database {
	private $_hostname 	= "localhost";
	private $_userhost	= "root";
	private $_passhost	= "123456";
	private $_dbname	= "php_firstmvc";
	private $_conn 		= NULL;
	private $_result	= NULL;
	function connect () {
		$this->_conn = mysql_connect( $this->_hostname, $this->_userhost, $this->_passhost );
		mysql_select_db( $this->_dbname, $this->_conn );
	}

	public function disconnect () {
		if ( $this->_conn ) {
			mysql_close( $this->_conn );
		}
	}

	public function query ( $sql ) {
		$this->_result = mysql_query( $sql );
	}

	public function num_rows () {
		if ( $this->_result ) {
			$row = mysql_num_rows( $this->_result );
		} else {
			$row = 0;
		}
		return $row;
	}

	public function fetch () {
		if ( $this->_result ) {
			$data = mysql_fetch_assoc( $this->_result );
		} else {
			$data = 0;
		}
		return $data;
	}

	public function fetchall () {
		$data = "";
		if ( $this->_conn ) {
			while ( $row = $this->fetch() ) {
				$data[] = $row;
			}
		} else {
			$data = 0;
		}
		return $data;
	}
}