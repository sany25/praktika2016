<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="windows-1251">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>����</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="col-md-3">
          <center>
            <?php
              if ( $_SESSION['chek']==true) {   
            ?>
           <a href="exit.php"><button type="button" id="oko" class="btn btn-primary">�����</button></a> 
            
         <?php
          }
          else{
         ?>
         <a href="login.php"><button type="button" id="oko" class="btn btn-primary">����</button></a>
          <a href="registration.php"><button type="button" id="oko" class="btn btn-primary">�����������</button></a>
         <?php
          }
          
         ?>
         </center>
          
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>