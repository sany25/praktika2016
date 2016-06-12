<?php
session_start();
	//$_SESSION['login']='aza';
	unset($_SESSION['login']);
	$_SESSION['chek'] = false;
header("Location: ../index.php");
?>