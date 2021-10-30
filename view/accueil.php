<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
            <title>Mini-classroom</title>
            <meta content="" name="description">
            <meta content="" name="keywords">
            <!-- page css -->
            <link rel="stylesheet" href="../public/css/accueil.css">
            <!-- Favicons -->
            <link href="../public/images/logo.png" rel="icon">
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
            <!--fontawesome -->
            <script src="https://kit.fontawesome.com/17d792cd8d.js" crossorigin="anonymous"></script>
            <!--Bootstrap -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        </head>
        <body>
            <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="flex-grow: 2">
                 <a class="navbar-brand" href="#">
                     <img class="rounded float-left" alt="responsive image" src="../public/images/logo.png" right="60px" height="60px">
                 </a>
                </div>
                     <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="col-lg-9 col-8 flex-container id=" bs-example-navbar-collapse-1""="" style="font-size: 11px;letter-spacing: 0.325em;font-weight: 300;">
                    <div class="navbar-collapse collapse" id="navbarNavDropdown" style="">
                    <ul class="navbar-nav">
                        <div class="flex-grow: 2">
                            <li class="nav-item">
                                <a class="nav-link" href="#back-end en attente">
                                    <i class="fas fa-arrow-circle-left" width="30px" height="30px" style="font-size: 34px;" aria-hidden="true"></i>
                                    <span class="sr-only"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#back-end en attente">
                                    <i class="fas fa-arrow-circle-right" width="30px" height="30px" style="font-size: 34px;" aria-hidden="true"></i>
                                </a>
                            </li>
                        </div>
                        <div class="flex-grow: 8">
                            <li class="nav-item ml-5">
                                <span class="navbar-text">
                                    <h1 class="text-success"> <strong>Mini Classroom</strong> </h1>
                                </span>
                            </li>
                        </div>
                        <div class="flex-grow: 2">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle ml-5" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded img-thumbnail" alt="responsive image" src="#back en attente">
                                </a>
                                    <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">
                                        <i class="fas fa-tools" aria-hidden="true">Paramètres</i>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                        <i class="fas fa-user" aria-hidden="true">Se déconnecter</i>
                                        </a>    
                                    </div>                 
                            </li>
                        </div>
                    </ul>
                    </div>
                </div>
            </nav>
               <div class="row" id="row_body">
                   <div class="col col-sm-12 col-lg-4" id="container-left">
                        <div class="jumbotron">
                            <h3 class="text-success">
                                Page d'Accueil..
                            </h3>
                                <img class="image-fluid" alt="responsive image" src="../public/images/logo.png" width="150px" height="150px">
                        </div>
                   </div>
                   <div class="col col-sm-12 col-lg-8" id="container-right">
                        <div class="jumbotron">
                            <div class="btn-vertical">
                                <button type="button" class="btn btn-success btn-lg btn-block">
                                    <i class="fas fa-user-shield" aria-hidden="true">
                                        Etudiants
                                    </i>
                                </button>
                                <button type="button" class="btn btn-success btn-lg btn-block">
                                    <i class="fas fa-chalkboard-teacher" aria-hidden="true">
                                        Proffesseur
                                    </i>
                                </button>
                            </div>
                        </div> 
                   </div>
               </div>
               <footer class="footer footer-expand-lg bg-dark footer-dark flex-container" height="200px">
               <div class="row text-center">
                   <div class="col-lg-4 col-sm-4 col-md-4 box">
                        <span class="copyright quick-links">
                            Copyright Mini-classroom
                        </span>
                   </div>
                   <div class="col-lg-4 col-sm-4 col-md-4 box">
                       <ul class="list-inline social-buttons">
                           <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-instagram" width="30px" height="30px" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                   </div>
                   <div class="col-lg-4 col-sm-4 col-md-4 box">
                       <ul class="list-inline quick-links">
                           <li class="list-inline-item">
                               <a href="aide.php">
                                    <i class="fas fa-question-circle" aria-hidden="true"></i>
                               </a>
                           </li>
                           <li class="list-inline-item">
                               <a href="Apropos.php">
                                   à propos
                               </a>
                           </li>
                       </ul>
                    </div>
                </div>
                </footer> 
                       
            </div>
    
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
        
    </html>
