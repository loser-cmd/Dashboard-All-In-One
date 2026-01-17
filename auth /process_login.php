<?php
session_start();
include "../config/database.php";

$u=$_POST['username'];
$p=md5($_POST['password']);

$q=mysqli_query($conn,"SELECT * FROM users WHERE username='$u' AND password='$p'");
$d=mysqli_fetch_array($q);

if($d){
 $_SESSION['login']=true;
 $_SESSION['role']=$d['role'];
 header("Location: ../dashboard/index.php");
}else{
 echo "Login gagal";
}
