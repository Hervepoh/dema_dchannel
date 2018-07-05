<!DOCTYPE html>
<html lang="en">

<head>
    <title>Administration</title>
    <meta charset="utf-8">
    <meta name="author" content="IANA">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= WEBROOT; ?>css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css" media="all" title="le style de base">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?= WEBROOT; ?>js/bootstrap.js"></script>
    <style>
    </style>
</head>

<body>
    <!-- la navbar-->
    <nav class="navbar navbar-expand-lg navbar-inverse top-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toogle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="img/w3newbie.png">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="accueil.html">Accueil</a>
                    </li>
                    <li>
                        <a href="logout.php">Déconnection</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>

        <div class="container-fluid">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        <?= flash();?>
