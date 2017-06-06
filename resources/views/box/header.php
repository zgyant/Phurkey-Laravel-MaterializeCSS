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

    <title>Phurkey - Nepal's largest book sharing network</title>
</head>
<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?= asset("js/materialize.min.js")?>"></script>

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
                <li><a href="#loginreg" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Login/Register"><i class="material-icons">account_circle</i></a></li>
            </ul>


            <ul class="side-nav" id="mobile-menu">
                <li> <a  href="#categories">Categories</a></li>
                <li class="divider"></li>
                <li><a class="dropdown-button" href="#!" data-activates="drowndownmain">Share a Book
                        <i class="material-icons right">arrow_drop_down</i></a></li>
                <li class="divider"></li>
                <li><a href="#loginreg"><i class="material-icons">account_circle</i>Login/Register</a></li>
            </ul>



        </div>
    </nav>
</header>
<main>
<?php
include resource_path("views/box/modals.php");
?>