<?php
include "../../includes/auth_check.php";
include "../../includes/role_check.php";
include "../../config/database.php";
$id=$_GET['id'];
$d=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM kinerja WHERE id=$id"));
if($_POST){
 mysqli_query($conn,"UPDATE kinerja SET
 bagian='$_POST[bagian]',indikator='$_POST[indikator]',
 capaian='$_POST[capaian]',target='$_POST[target]' WHERE id=$id");
 header("Location:index.php");
}
?>
<form method="post">
<input name="bagian" value="<?=$d['bagian']?>">
<input name="indikator" value="<?=$d['indikator']?>">
<input name="capaian" value="<?=$d['capaian']?>">
<input name="target" value="<?=$d['target']?>">
<button>Update</button>
</form>

