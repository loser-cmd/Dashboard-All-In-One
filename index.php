<?php
session_start();

/* === DEMO MODE (HAPUS SETELAH DEMO) === */
$_SESSION['user_id'] = 1;
$_SESSION['role'] = 'bupati'; 
// ganti: bupati | sekda | opd
/* ==================================== */
<?php
// Root entry point - Dashboard All In One

require_once __DIR__ . '/includes/auth_check.php';

// Default route → dashboard
require __DIR__ . '/modules/dashboard/index.php';
