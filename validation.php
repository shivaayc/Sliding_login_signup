<?php

session_start();

$con = mysqli_connect('localhost','root');
// if($con){
//     echo "connection successfull";
// }else{
//     echo "no connection";
// }

mysqli_select_db($con, 'chardham');

$name = $_POST['name'];
$password = $_POST['pswd'];

$querry = "select * from signin where name = '$name' && password = '$pswd' ";

$result = mysqli_query($con , $querry);

$num = mysqli_num_rows($result);
if($num == 1){
  $_SESSION['username'] = $name ;
    header('location:home.html');
}
else{
    header('location:index.html');
}

?>