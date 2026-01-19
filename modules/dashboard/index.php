<?php
include "../../includes/auth_check.php";
include "../../config/fingerprint.php";
?>
<h2><?=APP_NAME?></h2>
<p>Versi: <?=APP_VERSION?></p>
<p>Unit: <?=APP_UNIT?></p>
<p>Pemilik: <?=APP_OWNER?></p>
<p>Fingerprint: <?=APP_FINGERPRINT?></p>

<ul>
 <li><a href="../kinerja/index.php">Kinerja</a></li>
 <li><a href="../anggaran/index.php">Anggaran</a></li>
 <li><a href="../kegiatan/index.php">Kegiatan</a></li>
 <li><a href="/auth/logout.php">Logout</a></li>
</ul>

