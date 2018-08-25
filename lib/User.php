<?php
include 'Session.php';
include 'Database.php';

class User
{
	private $db;
	function __construct()
	{
		$this->db = new Database();
	}

	public function userRegistration($data){
		$name = $data['name'];
	}
}

?>