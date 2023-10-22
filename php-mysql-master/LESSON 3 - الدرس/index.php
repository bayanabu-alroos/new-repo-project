<?php

$username = "root";
$password = "";
$database = new 
PDO("mysql:host=localhost; dbname=application_php;charset=utf8;",$username,$password);

if($database){
  
echo 'تم اتصال بقاعدة بيانات';
}
?>