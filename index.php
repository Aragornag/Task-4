
<?php

//index.php

//Include Configuration File
include('config.php');
require "functions.php";
$login_button = '';



//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if(!isset($_SESSION['access_token']))
{
$path = URL_AUTH_Facebook . "?" . "client_id=" . ID_Facebook . "&redirect_uri=".REDIRECT_Facebook."&response_type=code";

 //Create a URL to obtain user authorization
 $login_button = '<div class="container">
                     <div class="row">
                        <div class="col-md-3" style="margin:auto;">
                        <a class="btn btn-outline-dark" href="'.$google_client->createAuthUrl().'" role="button" style="text-transform:none">
                        <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                        Login with Google
                        </a>
                     </div>
                     </div>
                     <a href="'.$path. '">facebook авторизация</a>
                  </div>';

}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Google Account</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
  
 </head>
 <body>
 <style>
 .User_DATA{
   width: 400px;
   margin: auto;
 }
 .btn-lg{
 width: 300px;
 height: 150px;}

 .button{
 margin:auto;
 margin-top:100px;
text-align:center; }
.bblock{
     float: left; /*Задаем обтекание*/
     line-height: 120px;/*Высота строки +  верт. центрирования текста*/
     font-size: 40px;
     background: dodgerblue;
     color: white;
     margin-top: 60px;
     width: 320px; /*Фиксируем ширину блока*/
     margin-right: 10px;
     text-align: center; /*Центрируем текст по горизонтали*/
}
 </style>

   <br />

   <br />
   <div class="panel panel-default">
   <?php
   if($login_button == '')
   {
    echo '<div class="User_DATA"><div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img style="border-radius: 63px;" src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="logout.php">Logout</a></h3></div></div></div>';


    echo '<div class="button" style="height:150px">
          <form action="action.php" method="post">
          <input type="submit" name="button1" value="Bro" class="btn btn-primary btn-lg">
          <input type="submit" name="button2" value="Sis" class="btn btn-secondary btn-lg">
          </form>
          </div>';
          $link = new mysqli("sql109.epizy.com", "epiz_30188011", "km58brtj","epiz_30188011_demo1");
         // $sql = 'SELECT * FROM demo_table';
         $sql = 'SELECT * FROM demo_table WHERE time IN (SELECT max(time) FROM demo_table)';

          $result = $link->query($sql);
          foreach($result as $row){
                      $broSis = $row["Bro_Sis"];
                      $name = $row["name"];
                      $time = $row["time"];
                 }


    echo '<div style="margin-top:50px;"><div style="width:200px;margin: 0 auto;"><p>Last message:</p><a href="javascript:window.location.reload();"><span>'.$broSis.'</span><br/><span style="color:#808080;">Sent by '.$name.' at '.$time.'</span></a></div></div>';
   }
   else
   {
   $link = new mysqli("sql109.epizy.com", "epiz_30188011", "km58brtj","epiz_30188011_demo1");
     if($link->connect_error){
         die("Ошибка: " . $link->connect_error);
     }

   $sql = "select count(Bro_Sis) from demo_table where Bro_Sis = 'Bro'";

   $result = $link->query($sql);

    foreach($result as $row){
             $Bro = $row["count(Bro_Sis)"];
         }

         $sql = "select count(Bro_Sis) from demo_table where Bro_Sis = 'Sis'";

         $result = $link->query($sql);
    foreach($result as $row){
      $Sis = $row["count(Bro_Sis)"];
      }

          // $Bro = $link->query('SELECT count(Bro) FROM demo_table');
          // $Sis = $link->query('SELECT count(Sis) FROM demo_table');
    echo '<div align="center">'.$login_button . '</div>';
    echo '<div class="bblock">Bro = '. $Bro .'</div>' . '<div class="bblock">Sis = '. $Sis .'</div>';
   }

   ?>

 </body>
</html>

