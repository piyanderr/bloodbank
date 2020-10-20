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
            
            <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
            <script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>

            
            <!--The CSS is external-->

            <link href="css/bdsidebar.css" rel="stylesheet">
        </head>
        
    <body>    
        
    <?php
        // To know what driver you are using mine is MySQL
        //            print_r(PDO::getAvailableDrivers()); 
    
        $object = new Bloody;
        $object->connect();
    
    ?>
        <!--the side bar-->
        
        <div class="d-flex toggled" id="wrapper">
        <div class="bg-light border-right" id="sidebar-wrapper">
            
            <div class="sidebar-heading">
                <h4>Start Bootstrap</h4></div>
            <div class="list-group list-group-flush">
            <div class="text-center">
                <a href="#" class="list-group-item list-group-item-action bg-light ">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
            </div>
          </div>
        </div>
            
            <div id="page-content-wrapper">
                
                
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            
                               
            <button class="navbar-btn" id="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
<!--
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
-->                
            </button>
                
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
                
            
            </nav>
<!--
            
            <div id="content">
 
                
         </div>      
-->
        </div>
    </div>

      <script>
        
        
         $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
      </script>
        
    </body>   
        
    </html>
