<?php
session_start();
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('pract') or die(mysql_error());
if($_SERVER['REQUEST_METHOD']=="POST"){
  $uLogin = $_POST['uLogin'];
  $uPass = $_POST['uPass'];
  $sql = "SELECT uLogin, uPass FROM users where uLogin = '$uLogin' and uPass = '$uPass'";
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
    echo "Данные введенны не верно";
  }
 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>РГР №3</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color: #EFEAF5;">
    <center><a href="index.php"><img src="images/logo.png" alt=""></a></center>
    <div class="col-sm-4 col-sm-offset-4" style="border:1px solid #537B53; padding:20px; background-color:rgba(123, 146, 99, 0.24);">
      <center>
        <form method="post" action="login.php" name="register_frm">
          <fieldset>
            <table class="formatTable" style="width:100%">
              <tr>             
                <td align="left">
                  <input name="uLogin" placeholder="Логин"  size="20" type="text" class=" form-control"><br> 
                </td>
              </tr>               
              <tr>             
                <td align="left">
                  <input name="uPass" placeholder="Пароль"  size="20" type="password" class=" form-control"><br>
                </td>
              </tr>               
            </table>
          </fieldset>
          <input name="__Cert" value="8a39b249" type="hidden"><br>
          <input name="register_frm_btn" value="Войти" type="submit" class="btn btn-success" style="margin-top:-20px;">
        </form>
        
    </center>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>