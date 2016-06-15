<?php
ini_set('default_charset', 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="windows-1251">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Блог</title>

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
        <form method="post" action="registration_php.php" name="register_frm">
          <fieldset>
            <table class="formatTable" style="width:100%">
              <tr>             
                <td align="left">
                  <input name="uLogin" placeholder="Придумайте логин"  value="" size="20" type="text" class="form-control"><br> 
                  <span id="login_check" class="err"></span>
                </td>
              </tr>    
              <tr>             
                <td align="left">
                  <input name="uName" placeholder="Ваше имя"  value="" size="20" type="text" class="form-control"><br> 
                  <span id="login_check" class="err"></span>
                </td>
              </tr>    
              <tr>             
                <td align="left">
                  <input name="uMail" placeholder="Ваш e-mail"  value="" size="20" type="text" class="form-control"><br> 
                  <span id="mail_check" class="err"></span>
                </td>
              </tr>        
              <tr>             
                <td align="left">
                  <input name="uPass" placeholder="Придумайте пароль"  value="" size="20" type="password" class="form-control"><br>
                </td>
              </tr>        
              <tr>              
                <td align="left">
                  <input name="Pass2" placeholder="Повторите пароль"  value="" size="20" type="password" class="form-control"><br>
                </td>
              </tr>        
            </table>
          </fieldset>
          <input name="__Cert" value="8a39b249" type="hidden"><br>
          <input name="register_frm_btn" value="Зарегистрироваться" type="submit" class="btn btn-success" style="margin-top:-20px;">
        </form>
        
    </center>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>