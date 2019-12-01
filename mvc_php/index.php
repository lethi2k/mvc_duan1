<?php 
include "model/dbconfig.php";
$db= new database();
$db->connect();

if (isset($_GET['controller'])) {
	$controller=$_GET['controller'];
}
else{
	$controller='';
}
switch ($controller) {
	case 'thanh-vien':
		require_once "controller/fond-end/index.php";
		break;
}

 ?>