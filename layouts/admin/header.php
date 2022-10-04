<?php
    include("../../core/config.php");
    include("../../core/functions.php");
    session_start();
    if($_SESSION['status']!="login"){
      header("location:../../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
  <title>Kertas - Sebuah Arsip Jurnal</title>
  <!-- DAISY UI -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.31.0/dist/full.css" rel="stylesheet" type="text/css" />
  
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  
  <!-- TAILWIND -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/298ddad7ce.js" crossorigin="anonymous"></script>

  <!-- SELECT2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  
  <!-- DATATABLE -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/datatables.min.css"/>
  
  <!-- QUILL -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  

  <!-- FLOWBITE -->
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  
  <!-- CUSTOM -->
  <link rel="stylesheet" href="../../assets/css/admin.css">
</head>
<body>
<?php require_once('navbar.php') ?>
<!-- MAIN -->
<div class="drawer drawer-mobile">
  <input id="drawer" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content p-6">