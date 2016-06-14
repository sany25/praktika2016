<?php
session_start();
ini_set('default_charset', 'UTF-8');
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('pract') or die(mysql_error());
$id = $_GET['id'];
$sql = "SELECT * FROM blog WHERE uID='$id' ";
  $blogers = mysql_query($sql) or die(mysql_error());

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
      <?php
    }
?>
        </div>
      </div>
      <div class="col-md-3">
        <div class="row">
              <hr>
               
              <?php
               if(isset($_SESSION['uLogin'])){
                  ?>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Написать
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form action="index.php" method="post" id="form_content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Написать</h4>
                        </div>
                        <div class="modal-body">
                          
                            <input name="theme" placeholder="Тема"  size="20" type="text" class=" form-control"><br> 
                              <textarea id="cont" class="form-control" rows="3" name="cont"></textarea><br/>
                              <input type="file" name="bimg">
                              
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" id="cont_add">Save changes</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                  </form>
                      </div>
                    </div>
                  </div>
              
               <?php
                }
               ?>
          </div>

        <div class="col-md-3">
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