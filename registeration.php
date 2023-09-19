<?php

session_start();
header('location:index.html');

$con = mysqli_connect('localhost','root');
// if($con){
//     echo "connection successfull";
// }else{
//     echo "no connection";
// }

mysqli_select_db($con, 'chardham');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pswd'];

$querry = "select * from signin where name = '$name' && email = '$email' && password = '$pswd' ";

$result = mysqli_query($con , $querry);

$num = mysqli_num_rows($result);
if($num == 1){
    echo "Duplicate Data" ;
}
else{
    $qy= "insert into signin(name, email, password) values ('$name' , '$email' , '$pswd') ";
    mysqli_query($con, $qy);
}

?>