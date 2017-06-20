<!--
__________
|  ______  |
| |      | |
| |______| |
|  ________|
| |
| |
|_|hurkey.com

Developed by Yakana IT Solutions

-->
<?php
$websettings=\App\phurkey_website::find(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="<?= asset("images/favicon.ico")?>" type="image/x-icon">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= asset("css/main.css")?>">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= asset("css/materialize.css")?>" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width,height=device-height initial-scale=1">
    <meta name="csrf-token" content="<?= csrf_token();?>">

    <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
    <meta name="keywords"
          content="<?=$websettings->meta_key;?>">

    <meta name="description"
          content="<?=$websettings->meta_desc;?>">


    <!-- Open Graph data -->
    <meta property="og:title" content="Coming Soon | Phurkey by Yakana IT Solutions" />
    <meta property="og:type" content="Phurkey Nepal's largest online book store where you can exchange, buy, sell used or unused books brought to you by Yakana IT Solutions. Nepal's first online second hand book portal" />
    <meta property="og:url" content="http://www.phurkey.com/" />
    <meta property="og:image" content="http://phurkey.com/images/cover.PNG" />
    <meta property="og:description" content="Phurkey Nepal's largest online book store where you can exchange, buy, sell used or unused books brought to you by Yakana IT Solutions. Nepal's first online second hand book portal" />
    <meta property="og:site_name" content="Phurkey | Phurkey.com" />
    <title><?=$websettings->web_title;?></title>
</head>
<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?= asset("js/materialize.min.js")?>"></script>
<!-- DataTables -->

<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<header>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="/index.php" class="brand-logo"><img src="<?= asset("images/logo.png")?>" width="80%"/>
            </a>
            <a href="#!" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

            <ul id="drowndownmain" class="dropdown-content">
                <li><a href="/newbook" style="color: black">Upload</a></li>
                <li class="divider"></li>
                <li><a href="#ordermodal" style="color: black">Order</a></li>
            </ul>

            <ul id="drowndownmain1" class="dropdown-content">
                <li><a href="/newbook" style="color: black">Upload</a></li>
                <li class="divider"></li>
                <li><a href="#ordermodal" style="color: black">Order</a></li>
            </ul>

            <ul class="right hide-on-med-and-down">
                <li> <a  href="#categories">Categories</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="drowndownmain1">Share a Book
                        <i class="material-icons right">arrow_drop_down</i></a></li>
                <?php
                if(Session::has('user_email'))
                {
                    echo "                <li><a href=\"/dashboard\" class=\"tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Dashboard\"><i class=\"material-icons\">home</i></a></li>
";
                }
                else{
                    echo "                <li><a href=\"#loginreg\" class=\"tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Login/Register\"><i class=\"material-icons\">account_circle</i></a></li>
";
                }
                ?>

            </ul>


            <ul class="side-nav" id="mobile-menu">
                <li> <a  href="#categories">Categories</a></li>
                <li class="divider"></li>
                <li><a class="dropdown-button" href="#!" data-activates="drowndownmain">Share a Book
                        <i class="material-icons right">arrow_drop_down</i></a></li>
                <li class="divider"></li>
                <?php
                if(Session::has('user_email'))
                {
                    echo "<li><a href='/dashboard'><i class='material-icons'>home</i>Dashboard</a></li>";
                }
                else{
                    echo "<li><a href='#loginreg'><i class='material-icons'>account_circle</i>Login/Register</a></li>";
                }
                ?>

            </ul>



        </div>
    </nav>
</header>
<main>
<?php
include resource_path("views/box/modals.php");
?>