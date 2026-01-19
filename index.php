<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* DEMO MODE */
$_SESSION['user_id'] = 1;
$_SESSION['role'] = 'bupati';
/* END DEMO */

// PATH YANG BENAR
require_once __DIR__ . '/includes/auth_check.php';
require_once __DIR__ . '/modules/dashboard/index.php';
