<?php
session_start();
ini_set('default_charset', 'UTF-8');
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('pract') or die(mysql_error());
$id = $_GET['id'];
$sql = "SELECT * FROM blog WHERE uID='$id' ";
  $blogers = mysql_query($sql) or die(mysql_error());

$sql = "SELECT * FROM com WHERE id_com='$id' ";
  $coment = mysql_query($sql) or die(mysql_error());

?>