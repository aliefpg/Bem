<?php
$basePath = (strpos($_SERVER['PHP_SELF'], 'pages/') !== false ) ? '../' : '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="BEM STIKOM CKI">
    <meta name="description" content="<?= isset($title) ? $title : 'BEM STIKOM CKI' ?>">
    <title><?= isset($title) ? $title : 'BEM STIKOM CKI' ?></title>

    <!-- Link CSS -->
    <link rel="icon" href="<?= $basePath; ?>assets/images/ico/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= $basePath; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= $basePath; ?>assets/css/proker.css">
    <link rel="stylesheet" href="<?= $basePath; ?>assets/css/filosofi.css">
    <link rel="stylesheet" href="<?= $basePath; ?>assets/css/sambutan.css">
    <link rel="stylesheet" href="<?= $basePath; ?>assets/css/Timeline.css">
    <link rel="stylesheet" href="<?= $basePath; ?>assets/css/kemen.css">

    <!-- Fonts and Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/98721b54aa.js" crossorigin="anonymous"></script>
    
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</head>
