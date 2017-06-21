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
$webdetails=\App\about_website::find(1);
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
    <meta property="og:title" content="Phurkey | Phurkey by Yakana IT Solutions" />
    <meta property="og:type" content="Phurkey Nepal's largest online book store where you can exchange, buy, sell used or unused books brought to you by Yakana IT Solutions. Nepal's first online second hand book portal" />
    <meta property="og:url" content="http://www.phurkey.com/" />
    <meta property="og:image" content="http://phurkey.com/images/cover.PNG" />
    <meta property="og:description" content="Phurkey Nepal's largest online book store where you can exchange, buy, sell used or unused books brought to you by Yakana IT Solutions. Nepal's first online second hand book portal" />
    <meta property="og:site_name" content="Phurkey | Phurkey.com" />
    <title>Privacy | Phurkey.com</title>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?= asset("js/materialize.min.js")?>"></script>
    <!-- DataTables -->

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>

</head>
<body>
<style>
    .privacy_box p{
        min-height: 100px;
    }
</style>

    <div class="privacy_box" style="width: 85%;min-height: 250px;margin: auto;margin-top: 25px;text-align: center">

        <img src="<?=asset('images/yakanalogo.png')?>" width="150"/>
        <h4 style="">Privacy Policy</h4>
            <?=$webdetails->privacy;?>
        </div>


</body>
</html>
