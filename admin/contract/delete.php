<?php

session_start();
include("../../core/functions.php");

if (!isset($_GET['id'])) {
  header('Location: ./index.php');
}

$mitra = find("kontrak", $_GET['id']);
$result = delete("kontrak", $_GET['id']);

flash("{$kontrak['nomor_kontrak']} berhasil dihapus!", "success");
header("Location: ./index.php");
