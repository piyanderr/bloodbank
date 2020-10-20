<!DOCTYPE html>

    <html>


    <?php

     include_once ('C:/xampp/htdocs/bd/connect.php');

    ?>

        <head>

            <title>blood gift</title>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
            <meta name="description" content="dashbord">
            <meta name="author" content="April">

            <!--The CSS is external-->

            <link rel="stylesheet" href="resetstylesheet.css">
            <link rel="stylesheet" href="stylebd.css">
<!--
            <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
            <script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
-->


        </head>

    <body>

    <?php
        // To know what driver you are using mine is MySQL
        //            print_r(PDO::getAvailableDrivers());

        $object = new Bloody;
        $object->connect();

    ?>
        <nav class="main-nav" id="wrap">

            <div class="btn-toggle-nav"></div>

                <ul>
                    <li><a href="#"> Home</a></li>
                    <li><a href="#"> Sample</a></li>
                    <li><a href="#"> Sample</a></li>
                    <li><a href="#"> Sample</a></li>
                    <li><a href="#"> Sample</a></li>
                </ul>

        </nav>

        <aside class="nav-sidebar">

                <ul>
                    <li><span>Dashboard</span></li>
                    <li><a href="#"> LOG IN</a></li>
                    <li><a href="#"> DONOR</a></li>
                    <li><a href="#"> PATIENT</a></li>
                    <li><a href="#"> BLOOD BANK</a></li>
                </ul>

        </aside>

    </body>

    </html>
