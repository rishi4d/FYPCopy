<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="description" content="Final Year Project ~ Online Music Streaming Platform">
        <meta name="author" content="Rishi Ghosh">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.8, maximum-scale=1.00, user-scalable=no shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <title>Rhythm</title>

        <!--Google Font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Roboto:700|Poppins|Poppins:300|Raleway:500|Comfortaa|Satisfy|Quicksand|Poiret One">

        <!-- Bootstrap CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Bootstrap JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!--Font Awesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">

        <link rel="icon" type="image/png" href="res/icons/circle-cropped2.png">
    </head>

    <body>
        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-sm navbar-dark sticky-top">
            <a class="navbar-brand" href="index.php"><i class="fab fa-deezer" style="color: rgb(230, 0, 0); font-size: 2em;"></i></a>
            <div class="mr-auto" id="leftitems">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="browse.php">Browse</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: rgb(190, 190, 190); font-weight: bold;" class="nav-link" href="mymusic.php">My Music</a>
                    </li>
                </ul>
            </div>
            <div class="mx-auto" id="searcharea">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form id="searchbox" action="">
                            <input type="text" placeholder="Search for Songs, Artists, Albums, and more.." name="Search">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>                    
                    </li>
                </ul>
            </div>
            <div class="ml-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" onclick="document.getElementById('sign').style.display='inherit'">Login / Signup</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- MODAL -->
        <div class="container-fluid modal text-center" id="sign">
            <form class="modal-inner" method="POST">
                <div class="container-fluid form-inner">
                    <p id="top">Login/Sign Up</p>
                    <input class="box" type="text" placeholder="Username" name="uname" required>
                    <input class="box" type="password" placeholder="Password" name="psw" required>
                        
                    <label><input class="my-auto" type="checkbox" checked="checked" name="remember">Remember me</label>
                    <button type="submit">continue</button>
                    <p class="psw"><a href="#">Forgot password?</a></p>
                </div>
            </form>
        </div>
        
        <!-- PLAYER -->
        
        <div id="player" class="container-fluid">
            <div id="player-inner" class="container-fluid">
                <img id="albumart" src="res/img/127369.jpg" alt="">
                <p id="title">titletitletitletitle</p>
                <p id="artist">artistartist</p>
                <div id="player-controls">
                    <button><i class="fas fa-backward"></i></button>
                    <button><i class="fas fa-play"></i></button>
                    <button><i class="fas fa-forward"></i></button>
                </div>
            </div>
        </div>

        <!-- SECTIONS -->
        <div class="container-fluid" id="sections">
            <div class="row mx-auto">
                <div id="playlists" class="col-12 col-sm-12 child">
                    <h4>Playlists<span id="sectionspan"><a href="#">View All</a></span></h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/127369.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86703.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86737.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="recent" class="col-12 col-sm-12 child">
                    <h4>Recently Played<span id="sectionspan"><a href="#">View All</a></span></h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/127369.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86703.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86737.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="liked" class="col-xs-6 col-12 col-sm-12 child">
                    <h4>Liked Songs<span id="sectionspan"><a href="">View All</a></span></h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/127369.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86703.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86737.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div id="albums" class="col-12 col-sm-12 child">
                    <h4>Albums<span id="sectionspan"><a href="">View All</a></span></h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/127369.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86703.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86737.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
    
                <div id="artists" class="col-12 col-sm-12 child">
                    <h4>Artists<span id="sectionspan"><a href="">View All</a></span></h4>
                    <div class="row">
                        
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/127369.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86703.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86737.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="recommend" class="col-12 col-sm-12 child">
                    <h4>Recommended Songs<span id="sectionspan"><a href="#">View All</a></span></h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/127369.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86703.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86737.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <img id="secimg" src="res/img/86759.jpg">
                                <div class="card-body">
                                    <p>music title</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            
        </div>

        <hr>
        <!-- FOOTER -->
        <div class="container-fluid footer">
            <p id="brandfooter"><i class="fab fa-deezer" style="color: rgb(230, 0, 0); font-size: 2.3em;"></i><b>&emsp;Rhythm</b><span>&#8482</span></p>
            <p><b>Rhythm</b> is single-stop solution for all your musical needs. Browse through hundreds of songs, movies, albums, artists, genres and enjoy your favourite music online for free &ensp;<b>>></b></p>
            <p id="footerending"><b>Rhythm</b>, Copyright&#169 2020<span style="float: right;"><b>Made in India</b></span></p>
        </div>

        <script src="app.js"></script>
    </body>

</html>