<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>        
        <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="page-top">        

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?= base_url() ?>">Rate Coaches</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <?php
                    if ($session_info) {
                        ?>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url() ?>home">Home</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url() ?>profile">Profile</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url() ?>contact">Contact</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url() ?>logout">Logout</a></li>
                        </ul>   
                        <?php
                    } else {
                        ?>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url() ?>home">Home</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url() ?>contact">Contact</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url() ?>login">Login</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url() ?>register">Signup</a></li>
                        </ul>      
                        <?php
                    }
                    ?>                    
                </div>
            </div>
        </nav>