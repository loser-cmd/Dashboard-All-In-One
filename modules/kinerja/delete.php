<?php
include "../../includes/auth_check.php";
include "../../includes/role_check.php";
include "../../config/database.php";
mysqli_query($conn,"DELETE FROM kinerja WHERE id=$_GET[id]");
header("Location:index.php");
