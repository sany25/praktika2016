<?php
session_start();
ini_set('default_charset', 'UTF-8');
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('pract') or die(mysql_error());
if($_SERVER['REQUEST_METHOD']=='POST'){
  $cont = $_POST['cont'];
  $uLogin = $_SESSION['uLogin'];
  $uName = $_SESSION['uName'];
  $bdate = date('Y-m-d');
  $id_com = $_POST['id'];
      $sql = "INSERT into com(id_com, name, comm, dates,  login)
                VALUES('$id_com', '$uName', '$cont', '$bdate', '$uLogin')";
      mysql_query($sql) or die(mysql_error());
};
header("Location: read.php?id=".$id_com);
?>