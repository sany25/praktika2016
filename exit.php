<?php
session_start();
ini_set('default_charset', 'UTF-8');
	//$_SESSION['login']='aza';
	unset($_SESSION['uLogin']);
	$_SESSION['chek'] = false;
header("Location: index.php");
?>