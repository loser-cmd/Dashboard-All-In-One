<?php
include "../../includes/auth_check.php";
include "../../config/database.php";
$q=mysqli_query($conn,"SELECT * FROM kinerja");
echo "<a href='add.php'>Tambah</a><br><br>";
while($d=mysqli_fetch_assoc($q)){
 echo "{$d['bagian']} | {$d['indikator']} ({$d['capaian']}/{$d['target']})
 <a href='edit.php?id={$d['id']}'>Edit</a>
 <a href='delete.php?id={$d['id']}'>Hapus</a><br>";
}
