<?php 
    session_start();
?>
<html>
    <head>
        <title>Pocetna strana</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


        <link rel="stylesheet" href="css/styleFromLess.css" type="text/css">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
    </head>
    <body onload="boja()">
        
        
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navigacija">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">LASER PRINT</a>
                </div>
                
                <div class="collapse navbar-collapse" id="navigacija">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html"><span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Roba</a></li>
                        <li><a href="#">Kontakt</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(empty($_SESSION['username'])) { ?>
                        <li><a href="php/register.php">Registrujte se</a></li>
                        <li><a href="php/login.php">Ulogujte se</a></li>
                        <?php } else { ?>
                            <li>
                                <a href="#"><span>Dobrodosli <?php echo $_SESSION['username'] ?></span></a>
                            </li>
                            <li>
                                <a href="php/logout.php"><span>Izlogujte se</span></a>
                            </li>
                        <?php } ?>
                        }
                    </ul>
                </div>
            </div>
        
        </nav>
        
        <div id="headbar">
            <p id="name">Laser Print</p>
            <p id="moto">pouzdanost na prvom mestu</p>
        </div>
        
        <br>
        <h1 id="roba">Asortiman robe</h1>
        <br>
        <br>
        
        <div id="roba">
            <div class="container">
                <div class="row">
                   <div class="col-md-4">
                       <div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="images/brio2.jpg" alt="Card image cap"> <br>
                          <div class="card-block">
                            <h2 class="card-title">Upaljači</h2> <br>
                            <a href="#" class="btn btn-success">Naš izbor</a>
                          </div>
                        </div>
                    </div>

                   <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="images/chalk.jpg" alt="Card image cap"><br>
                          <div class="card-block"><br>
                            <h4 class="card-title">Olovke</h4>  <br>
                            <a href="#" class="btn btn-success">Naš izbor</a>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                      <img class="card-img-top" src="images/shirt.jpg" alt="Card image cap"><br>
                      <div class="card-block">
                        <h4 class="card-title">Tekstil</h4> <br>
                        <a href="#" class="btn btn-success">Naš izbor</a>
                      </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        <br>
        <br>
        
        <div id="bottom">
            <p>@2017 Igor Milosavljevic 2644</p>
        </div>
                <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
        <script type="text/javascript" src="js/skripta.js"></script>
    
    
    </body>
    
</html>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></scrip