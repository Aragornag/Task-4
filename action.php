<?php
include('config.php');


$link = new mysqli("sql109.epizy.com", "epiz_30188011", "km58brtj","epiz_30188011_demo1");
  if($link->connect_error){
      die("Ошибка: " . $link->connect_error);
  }
 $email = $_SESSION['user_email_address'];
 $name = $_SESSION['user_first_name'];
 $date = date("Y-m-d H:i:s");



if(isset($_POST["button1"]))
{
 $sql = "INSERT INTO `demo_table` (`id`, `name` , `email`, `time`, `Bro_Sis`) VALUES (NULL, '$name' , '$email', '$date', 'Bro');";
}
if(isset($_POST["button2"]))
{
 $sql = "INSERT INTO `demo_table` (`id`, `name` , `email`, `time`, `Bro_Sis`) VALUES (NULL, '$name' , '$email', '$date', 'Sis');";
}

$link->query($sql);
  $link->close();
header('Location: https://art-task4.epizy.com');
