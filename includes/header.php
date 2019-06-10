<!DOCTYPE html>
<html lang="en">

<head>

    <title>
        <?php

        if (isset($title) && !empty($title)) {

            echo $title;
        } else {

            echo "WatchUS Incorporated";
        }

        ?>

    </title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/theme.css">
    <link rel="stylesheet" href="./styles/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-transparent fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="./images/WATCHUSLOGO2.1.PNG" alt="logo" width="100" height="auto" class="d-inline-block align-middle">WatchUS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="<?php if ($page == 'home') {
                                    echo 'active';
                                } ?>">
                        <a class="nav-link" href="./index.php">Home </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Collection
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Smart Watches</a>
                            <a class="dropdown-item" href="#">Digital Watches</a>
                            <a class="dropdown-item" href="./analog.php">Analog Watches</a>
                        </div>
                    </li>
                    <li class="<?php if ($page == 'about') {
                                    echo 'active';
                                } ?>">
                        <a class="nav-link" href="./index.php#about">About</a>
                    </li>
                    <li class="<?php if ($page == 'services') {
                                    echo 'active';
                                } ?>">
                        <a class="nav-link" href="./services.php">Services</a>
                    </li>
                    <li class="<?php if ($page == 'cart') {
                                    echo 'active';
                                } ?>">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Login </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>