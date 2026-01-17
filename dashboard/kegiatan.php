<?php include "../includes/auth_check.php";
include "../config/database.php";

$q=mysqli_query($conn,"SELECT * FROM kegiatan");
while($d=mysqli_fetch_array($q)){
 echo $d['nama_kegiatan']." - ".$d['status']."<br>";
}

