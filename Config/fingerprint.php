<?php
/**
 * Fingerprint Source Code
 * Owner : Juni Putra
 * Digunakan untuk Dashboard Pimpinan Bagian Umum SETDA
 */

$owner_name = "Juni Putra";
$project    = "Dashboard Pimpinan Setda Bagian Umum";
$tahun      = "2026";

define("APP_OWNER", $owner_name);
define("APP_PROJECT", $project);
define("APP_YEAR", $tahun);

// Hash utama
define("APP_SHA256", hash("sha256", $owner_name.$project.$tahun));
define("APP_MD5", md5($owner_name.$tahun));

// Fingerprint readable
define(
  "APP_FINGERPRINT",
  strtoupper("SETDA-UMUM-".substr(hash("crc32",$owner_name),0,6)."-".$tahun)
);

