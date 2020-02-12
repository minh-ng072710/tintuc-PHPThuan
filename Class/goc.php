<?php
require_once("../Config.php");
class goc{
	protected $db;
	function __construct(){
		$this->db=new MySQLi("localhost","root","","news");
		$this->db->set_charset("utf8");
	}
}
?>