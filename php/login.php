<?php

$user = $_POST['user'];
$password = $_POST['password'];

if($user==null){
    header('LOCATION:../html/sign_in.html');
}

$link =mysqli_connect('localhost','root','','login_system');
$check = "SELECT * FROM `users` WHERE `user_name` LIKE '%$user%'";
$query = mysqli_query($link ,"SELECT * FROM `users` WHERE `user_name` LIKE '%$user%'") ;
$arr=[];
while($temp = mysqli_fetch_assoc($query)){
    $arr[]=$temp;
}
if(!empty($arr)){
    foreach($arr as $v){    
        foreach($v as $key => $value){
            if($key == 'password'){
                if($value != $password){
    header('LOCATION:../html/sign_in.html');
                }
            }
        }
    }
}else{
    header('LOCATION:../html/sign_in.html');
}

header('LOCATION:../html/welcome.html');

