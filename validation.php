<?php
$name= $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (!(empty($_POST["name"])&&empty($_POST["email"])&&empty($_POST["password"]))&&filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)&&(strlen($_POST["password"])>=8)){
        $conn = mysqli_connect("localhost","root","","regisinfo");
        $query = "INSERT INTO registration (`name`, `email`, `password`) VALUES('$name','$email','$password')";
        mysqli_query($conn,$query,);
        header("location: ../Validation/postreg.php");
        exit();
    }
    if (empty($_POST["name"])&&empty($_POST["email"])&&empty($_POST["password"])){
        header("location: ../Validation/index.php?signup=fields");
        exit();
    }
    if(empty($_POST["name"])){
        header("location: ../Validation/index.php?signup=name");
        exit();
    }else{
        $name= $_POST["name"];
    }
    if(empty($_POST["email"])){
        header("location: ../Validation/index.php?signup=email");
        exit();
    }else{
        $email = $_POST["email"];
    }
    if(!(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))) {
        header("location: ../Validation/index.php?signup=email1");
        exit();
    }else{
        $email = $_POST["email"];
    }
    if(empty($_POST["password"])){
        header("location: ../Validation/index.php?signup=password");
        exit();
    } else {}
    if (strlen($_POST["password"])>=8){ 
        $password = $_POST["password"];
    }else{
        header("location: ../Validation/index.php?signup=password1");
        exit();
    }
}else{}
 
?>