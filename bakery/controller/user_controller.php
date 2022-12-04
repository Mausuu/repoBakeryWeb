<?php
include "../model/user.php";
if(isset($_POST) && !empty($_POST)){
    $user=new User($_POST['user_name'],MD5($_POST['password']));
    $user->insertUser();
    $data=$user->getUser($_POST['user_name']);
    var_dump($data);
    session_start();
    if($_POST["username"]=="nhut"&&$_POST["password"]="123"){
        $_SESSION["isUser"]=true;
        header("Location: ../index.php");
    }
    // if($user->getUsername()=='admin'&&$user->getPassword()=='admin'){
    //     header("Location: ../index.php");
    //     exit();
    // }
}
// else{
//     echo $_GET["name"];
// }
