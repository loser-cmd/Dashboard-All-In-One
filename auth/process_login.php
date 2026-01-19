<?php
session_start();
include "../config/database.php";

$u=$_POST['username'];
$p=$_POST['password'];

$q=mysqli_query($conn,"SELECT * FROM users WHERE username='$u'");
$d=mysqli_fetch_assoc($q);

if($d && password_verify($p,$d['password'])){
    $_SESSION['login']=true;
    $_SESSION['role']=$d['role'];
    header("Location:/modules/dashboard/index.php");
    exit;
}
echo "Login gagal";
