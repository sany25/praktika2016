<?php
include "read_php.php";
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
    <script type="text/javascript"  src="js/script.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color: #EFEAF5;">
    <div class="container">
      <center><a href="index.php"><img src="images/logo.png" alt=""></a></center>
      <div class="col-md-9">
        <div class="row">
<?php
    while($value = mysql_fetch_array($blogers)) {
      ?>
      <div class="row">
      <div class="col-md-10 col-md-offset-1 blogss">
        <h1 style="border-bottom:1px solid #fff;">
          
            <?php echo $value['theme']; ?>
          
        </h1>
        <p style="text-align: justify;"> 
          <?php
          if ($value['bimg']) {
              echo '<img src="images/'.$value['bimg'].'" width=700>';
            }
            else 
              echo '<img src="images/default.jpeg" width=700>';
            $s = file("file/".$value['bfile'].".txt");
            foreach ($s as $val) {
              echo $val;
            }
          ?>
        </p>
        <div class="col-md-6">
          <p style="text-align:left;border-top:1px solid #fff;"> 
          <?php 
          if ($_SESSION['uLogin']==$value["uLogin"]) {
            echo '<a href="del.php?id='.$value["uID"].'">Удалить</a>'; 
          }
          ?>
        </p>
        </div>
        <div class="col-md-6">
          <p style="text-align:right;border-top:1px solid #fff;"> 
          <?php echo "<b>".$value['uName']."   </b>";echo $value['bdate']; ?>
        </p>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <?php 
          while($value = mysql_fetch_array($coment)) {
            echo "<p>".$value['comm']."</p>";
            echo "<p style='text-align:right;border-top:1px solid #fff;'><b>".$value['name']."</b>    ".$value['dates']."</p>";
          }
        ?>
      </div>
      </div>
      <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <form action="add_com.php" method="post" id="form_content" enctype='multipart/form-data'>
            <?php echo '<input type="hidden" value="'.$id.'" name="id">' ?>
            <textarea id="area_id" class="form-control" rows="3" name="cont"onselect='savesel(this)' onchange='savesel(this)' onclick='savesel(this)' onfocus='savesel(this)' onkeyup='savesel(this)'></textarea><br/>

                  <p>Редактирование текста</p>
                  <div class="btn btn-primary" onclick="click_bb('area_id', 'b');">B</div>
                  <div class="btn btn-primary" onclick="click_bb('area_id', 'i');">i</div>
                  <div class="btn btn-primary" onclick="click_bb('area_id', 'sub');">Нижний индекс</div>
                  <div class="btn btn-primary" onclick="click_bb('area_id', 'sup');">Верхний индекс</div>
                  <div class="btn btn-primary" onclick="click_bb2('area_id', 'span style=text-transform:uppercase');">Заглавные </div>
                  <div class="btn btn-primary" onclick="click_bb2('area_id', 'span style=color:red');">Красный</div>
<br><br>
              <button type="submit" class="btn btn-primary" id="cont_add">Save changes</button>

      </form>
      </div>
      </div>  
      <?php
    }
?>
        </div>
      </div>
      <div class="col-md-3">
        <div class="row">
        
              <center>
                <?php
                  if ( $_SESSION['chek']==true) {   
                ?>
               <a href="exit.php"><button type="button" id="oko" class="btn btn-primary">Выход</button></a> 
                
             <?php
              }
              else{
             ?>
             <a href="login.php"><button type="button" id="oko" class="btn btn-primary">Вход</button></a>
              <a href="registration.php"><button type="button" id="oko" class="btn btn-primary">Регистрация</button></a>
             <?php
              }
              
             ?>
             </center>
              
            </div>
          </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>