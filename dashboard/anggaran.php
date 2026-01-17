<?php include "../includes/auth_check.php";
include "../config/database.php";

$q=mysqli_query($conn,"SELECT * FROM anggaran");
while($d=mysqli_fetch_array($q)){
 echo $d['bagian']." - Rp".$d['realisasi']." / Rp".$d['pagu']."<br>";
}

