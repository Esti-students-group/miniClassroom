<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
            <title>Mini-classroom</title>
            <meta content="" name="description">
            <meta content="" name="keywords">
            <!-- page css -->
            <link rel="stylesheet" type="text/css" href="../public/css/accueil.css">
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
            <div class="container-lg container-sm">
                <div class="row" id="header">
                    <div class="col-lg-2 col-sm-2" id="logo_icon">
                        <img src="../public/images/logo.png" type="images/png" width="60px" height="60px"/>
                    </div>
                    <nav class="col-9 navbar navbar-expand navbar-dark">
                        <a class="navbar-brand" href="#">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                            <span class="navbar-toogler-icon"></span>
                        </button>
                        <div id="navbarContent" class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-arrow-circle-left" width="40px" height="40px" style="color:darkblue;"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-arrow-circle-right" width="40px" height="40px" style="color:darkblue"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="navbarContent" class="collapse navbar-collapse">
                            <p>
                                <h4>
                                    MINI-CLASSROOM
                                </h4>
                            </p>
                        </div>
                        <div id="navbarContent" class="collapse navbar-collapse">
                            <figure>
                                <img src="allo.png"></img>
                            </figure>
                        </div> 
                    </nav>
                </div>
               <div class="row" id="row_body">
                   <div class="col-sm-12 col-lg-4" id="container-left">
                        <div class="jumbotron">
                            <h3>
                                Page d'Accueil..
                            </h3>
                            <figure>
                                <img class="logo_mini_classroom" src="../public/images/logo.png" width="60px" height="60px">
                            </figure>
                        </div>
                   </div>
                   <div class="col-sm-12 col-lg-8" id="container-right">
                       <div class="card">
                            <div class="col-lg-8 col-sm-12" id="button_user_administrateur">
                                <div class="card-body">
                                    <button type="button" class="btn btn-default btn-block">
                                        <a href="students.php">
                                            <i class="fas fa-user-graduate" width="30px" height="30px"></i>
                                            <h3>
                                                Etudiants
                                            </h3>
                                        </a>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-12" id="button_user_invite">
                                <div class="card-body">
                                    <button type="button" class="btn btn-default btn-block">
                                        <a href="proffesseur.php">
                                           <i class="fas fa-user-tie"></i>
                                            <h3>
                                                Proffesseurs
                                            </h3>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
               <div class="row text-center">
               <footer class="footer footer-expand footer-dark">
                   <div class="col-lg-4 col-sm-4 col-md-4 box">
                        <span class="copyright quick-links">
                            Copyright Mini-classroom
                        </span>
                   </div>
                   <div class="col-lg-4 col-sm-4 col-md-4 box">
                       <ul class="list-inline social-buttons">
                           <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                   </div>
                   <div class="col-lg-4 col-sm-4 col-md-4 box">
                       <ul class="list-inline quick-links">
                           <li class="list-inline-item">
                               <a href="aide.php">
                                    <i class="fas fa-question-circle"></i>
                               </a>
                           </li>
                           <li class="list-inline-item">
                               <a href="Apropos.php">
                                   à propos
                               </a>
                           </li>
                       </ul>
                    </div>
                </footer>
                </div>        
            </div>
        </body>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </html>