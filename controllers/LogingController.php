<?php
require_once("../config/Database.php");
require_once("../models/Pdo.php");
require_once("../models/Repositorys/UserRepository.php");
require_once("../services/Services/UsersService.php");

$email=$_POST["email"];
$password=$_POST["password"];

$userrepo = new UserRepository();
$userService = new UsersService($userrepo);
if($userService->IsValid($email,$password)){
    echo "true";
}else{
    echo "false";
}

 ?>