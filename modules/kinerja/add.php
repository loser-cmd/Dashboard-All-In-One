<?php
include "../../includes/auth_check.php";
include "../../includes/role_check.php";
include "../../config/database.php";
if($_POST){
 mysqli_query($conn,"INSERT INTO kinerja VALUES(
 NULL,'$_POST[bagian]','$_POST[indikator]','$_POST[capaian]','$_POST[target]')");
 header("Location:index.php");
}
?>
<form method="post">
<input name="bagian"><input name="indikator">
<input name="capaian"><input name="target">
<button>Simpan</button>
</form>

