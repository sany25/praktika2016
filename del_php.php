<?php
session_start();
ini_set('default_charset', 'UTF-8');
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('pract') or die(mysql_error());
if ($_GET['id']) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM blog WHERE uID='$id' ";
  $blogers = mysql_query($sql) or die(mysql_error());
};
if($_SERVER['REQUEST_METHOD']=='POST'){
      $id = $_POST['id'];
      $sql = "DELETE FROM blog WHERE uID='$id' ";
      mysql_query($sql) or die(mysql_error());
};

?>