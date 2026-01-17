<?php include "../includes/auth_check.php";
include "../config/database.php";

$q=mysqli_query($conn,"SELECT * FROM kinerja");
while($d=mysqli_fetch_array($q)){
 echo $d['bagian']." - ".$d['indikator']." : ".$d['capaian']."/".$d['target']."<br>";
}

