<?php
class Model_User extends Database {
	protected $_username;
	protected $_password;
	protected $_level;

	function __construct () {
		$this->connect();
	}

	public function setUsername ( $user ) {
		$this->_username = $user;
	}

	public function getUsername () {
		return $this->_username;
	}

	public function setPassword ( $password ) {
		$this->_password = $password;
	}

	public function getPassword () {
		return $this->_password;
	}

	public function setLevel ( $level ) {
		$this->_level = $level;
	}

	public function getLevel () {
		return $this->_level;
	}

	public function insertUser () {
		$sql = "INSERT INTO tbl_user (username, password, level) VALUES ('" . $this->getUsername() . "', '" . $this->getPassword() . "', '" . $this->getLevel() . "')";
		$this->query( $sql );
	}

	public function checkUsername ( $id = "") {
		if ( $id != "") {
			$sql = "SELECT * FROM tbl_user WHERE username='". $this->getUsername() ."' AND id!='$id'";
		} else {
			$sql = "SELECT * FROM tbl_user WHERE username='". $this->getUsername() ."'";
		}
		
		$this->query( $sql );
		if ( $this->num_rows() == 0 ) {
			return true;
		} else {
			return false;
		}
	}

	public function listall () {
		$sql = "SELECT * FROM tbl_user ORDER BY id DESC";
		$this->query( $sql );
		return $this->fetchall();
	}

	public function deleteUser ( $id ) {
		$sql = "DELETE FROM tbl_user WHERE id='$id'";
		$this->query( $sql );
	}

	public function getuserbyid ( $id ) {
		$sql = "SELECT * FROM tbl_user WHERE id = '$id'";
		$this->query( $sql );
		return $this->fetch();
	}

	public function updateUser ( $id ) {
		if ($this->getPassword() != "none") {
			$sql = "UPDATE tbl_user SET username='" .$this->getUsername(). "', password='" .$this->getPassword(). "', level='" .$this->getLevel(). "' WHERE id='$id'";
		} else {
			$sql = "UPDATE tbl_user SET username='" .$this->getUsername(). "', level='" .$this->getLevel(). "' WHERE id='$id'";
		}
		$this->query( $sql );
	}

	public function getUserByLevel ( $id ) {
		if ( $id == 0 ) {
			$sql ="SELECT * FROM tbl_user ORDER BY id DESC";
		} else {
			$sql ="SELECT * FROM tbl_user WHERE level='$id'";
		}
		$this->query( $sql );
		return $this->fetchall();
	}
}