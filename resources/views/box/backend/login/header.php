<?php
if(Session::has('error'))
{
    if(Session::get('error')=='ivc')
    {
        $msg='Invalid Email/Password';
        Session::forget('error');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Yakana CMS |  LOGIN</title>
    <link rel="stylesheet" href="<?= asset("css/reset.css")?>">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?= asset("css/styleL.css")?>">
</head>