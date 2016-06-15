<?php
session_start();
ini_set('default_charset', 'UTF-8');
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('pract') or die(mysql_error());
if($_SERVER['REQUEST_METHOD']=="POST"){
  $uLogin = $_POST['uLogin'];
  $uPass = $_POST['uPass'];
  $sql = "SELECT uLogin, uPass, uName FROM users where uLogin = '$uLogin' and uPass = '$uPass'";
  $res = mysql_query($sql) or die(mysql_error());
  $user = mysql_fetch_assoc($res);
  if($user['uLogin'] == $uLogin){
    $_SESSION['uLogin'] = $user['uLogin'];
    $_SESSION['uName'] = $user['uName'];
    $_SESSION['chek'] = true;
    header("Location: index.php");
  }
  else {
    $_SESSION['chek'] = false;
    echo "Данные введенны не верно <br>"; 
    echo "<a href=login.php>Назад</a>";
  }
}
?>