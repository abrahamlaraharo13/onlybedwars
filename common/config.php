<?php 

if (!isset($_GET['page']) or $_GET['page'] == "home") {
	$page_name = "Inicio | Red Social";
	$page = "home";
}elseif ($_GET['page'] == "profile") {
	$page_name = "Perfil | Red Social";
	$page = $_GET['page'];
}else{
	$page_name = "Inicio | Red Social";
	$page = "error404";
}


?>