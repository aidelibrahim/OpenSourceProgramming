<?php  

if(!defined("PATH")){

	define("PATH",dirname(__FILE__));
}
require_once( PATH . "/fileclass.php");
$con = new Database("localhost" , "admin" , "123" , "waa");	
//$con->mysqli->query( "SELECT * FROM something WNERE" ); 