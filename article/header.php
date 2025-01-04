<!DOCTYPE html>
<?php include('function.php'); ?>
<html lang="en">
    <head>
        <title>CMS News</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- @style -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/sport.css">
        <link rel="stylesheet" href="assets/css/news-detail.css">
        <link rel="stylesheet" href="assets/css/contact.css">
        <link rel="stylesheet" href="assets/css/search.css">
        <!-- @google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kantumruy&display=swap" rel="stylesheet">
        <!-- @google font -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- @slick slider -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <!-- @funcy box -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    </head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <h3>JONGDENG NEWS</h3>
                </a>
            </div>
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li class="menu-sport"><a href="javascript:viod(0)">SPORT</a>
                    <ul class="sub-menu sport">
                        <li>
                            <a href="sport-news-national.php">National</a>
                        </li>
                        <li>
                            <a href="">International</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-sport"><a href="javascript:viod(0)">SOCIAL</a>
                    <ul class="sub-menu sport">
                        <li>
                            <a href="">National</a>
                        </li>
                        <li>
                            <a href="">International</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-sport"><a href="javascript:viod(0)">ENTERTAINMENT</a>
                    <ul class="sub-menu sport">
                        <li>
                            <a href="">National</a>
                        </li>
                        <li>
                            <a href="">International</a>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
            <div class="search">
                <form action="search.php" method="get">
                    <?php
                        $query = '';
                        if(isset($_GET['query'])) {
                            $query = $_GET['query'];
                        }
                    ?>
                    <input type="text" class="box" placeholder="Search Here" name="query" value="<?= $query ?>">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>    
        </div>
    </header>