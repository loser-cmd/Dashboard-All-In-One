<?php if ($_SESSION['role'] === 'bupati'): ?>
<li><a href="/modules/anggaran/">Anggaran</a></li>
<?php endif; ?>

<?php if (in_array($_SESSION['role'], ['bupati','sekda'])): ?>
<li><a href="/modules/kinerja/">Kinerja</a></li>
<?php endif; ?>

<?php if ($_SESSION['role'] === 'opd'): ?>
<li><a href="/modules/kegiatan/">Kegiatan</a></li>
<?php endif; ?>

