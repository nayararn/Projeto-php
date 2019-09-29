<?php
session_start();
require 'protect.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Hello, world!</title>
    <style>
        .min-height-100vh {
            min-height: 100vh;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <?php
    include 'header.php';
    ?>
    <div class="row">
        <div class="col" style="text-align: center;margin-top: 25vh; ">
            <h4>Parabéns, você esta logadissímo.</h4>
            <img src="http://giphygifs.s3.amazonaws.com/media/sIIhZliB2McAo/200.gif" alt="">
        </div>
    </div>
</div>
</html>