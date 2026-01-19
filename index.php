<?php
// Root entry point - Dashboard All In One

require_once __DIR__ . '/includes/auth_check.php';

// Default route → dashboard
require __DIR__ . '/modules/dashboard/index.php';
