<?php
include "del_php.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="windows-1251">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Блог</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color: #EFEAF5;">
    <div class="container">
      <center><a href="index.php"><img src="images/logo.png" alt=""></a>
      <?php

      if ($_GET['id']) {
      while($value = mysql_fetch_array($blogers)){

          echo "<p>Вы действительно желаете удалить тему: <b>".$value['theme']."</b> ?</p>";
          
      ?>
      <form action="del.php" method="post" id="form_content">
        <?php echo '<input type="hidden" value="'.$value['uID'].'" name="id">' ?>
        <button type="submit" class="btn btn-primary" id="cont_add">Удалить</button>
      </form>
        <?php echo '<a href="read.php?id='.$value["uID"].'">'; ?>
          <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
        </a>
      </center>
    </div>
    <?php
}}
else
echo "<p>Ваша тема была удаленна из блога.</p>";

      ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>