<?php
ini_set('default_charset', 'UTF-8');
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('pract') or die(mysql_error());
if($_SERVER['REQUEST_METHOD']=="POST"){
  $uLogin = $_POST['uLogin'];
  $uPass = $_POST['uPass'];
  $Pass2 = $_POST['Pass2'];
  $uName = $_POST['uName'];
  $uMail = $_POST['uMail'];
    if ($uPass == $Pass2) {
      $sql = "INSERT into users(uLogin, uPass, uName, uMail)
                VALUES('$uLogin' ,'$uPass' ,'$uName' ,'$uMail')";
      mysql_query($sql) or die(mysql_error());//отправка запроса
      mysql_close();
      mail("$uMail", "Подтверждение регистрации", $message); 
      header("Location: index.php");//переадресация на главную страницу
    }
    else
      header("Location: registration.php");//переадресация на главную страницу
  
 
}
?>