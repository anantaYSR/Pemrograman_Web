<?php

session_start();
include("../../core/functions.php");

if (!isset($_GET['id'])) {
  header('Location: ./index.php');
}

$mitra = find("mitra", $_GET['id']);
$result = delete("mitra", $_GET['id']);

flash("{$mitra['nama']} berhasil dihapus!", "success");
header("Location: ./index.php");
