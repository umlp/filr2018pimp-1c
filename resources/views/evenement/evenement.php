<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Parrainage - Home</title>

  <!-- Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

  <!-- Styles -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href='//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://parrainage.herokuapp.com/css/evenement.css">
  <script type='text/javascript' src='//code.jquery.com/jquery-1.11.1.min.js'></script>
  <script type='text/javascript' src='//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js'></script>
  <script type='text/javascript'></script>
  <style>
    body {
      font-family: 'Lato';
    }

    .fa-btn {
      margin-right: 6px;
    }
  </style>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
</head>

<body id="app-layout">
  <!-- barre de menu -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="https://parrainage.herokuapp.com/home">Parrainage</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li>
            <a href="https://parrainage.herokuapp.com/home">Home</a>
          </li>
          <!-- <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li> -->
          <li class="active">
            <a href="https://parrainage.herokuapp.com/home/evenement">Evènement</a>
          </li>
          <li>
            <a href="#">Profil</a>
          </li>
          <li>
            <a href="https://parrainage.herokuapp.com/home/agenda">Agenda</a>
          </li>
          <li>
            <a href="#">Communication</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
          <li>
            <a href="index.html">
              <span class="glyphicon glyphicon-log-out"></span> Déconnexion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="container">
    <div class="row">
      <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
        <ul class="event-list">

          <li>
            <time datetime="2018-10-29">
              <span class="day">jour</span>
              <span class="month">mois</span>
              <span class="year">année</span>
              <span class="time">ALL DAY</span>
            </time>
            <img alt="LOGO inte STPI" src="https://parrainage.herokuapp.com/image/logointe.jpg" />
            <div class="info">

              <div class="row">
                <div class="col-sm-10">
                  <h2 class="title">INTE - SEMAINE 0</h2>
                </div>
                <div class="col-sm-2">
                  <!--<img alt="germany" class="flag" src="https://theodora.com/flags/new/de-t.gif" />-->
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">Début:</div>
                <div class="col-sm-9">XX XX XXXX (XX:XX)</div>
              </div>
              <div class="row">
                <div class="col-sm-3">Fin:</div>
                <div class="col-sm-9">Ceci est un test(XX:XX)</div>
              </div>
              <div class="row">
                <div class="col-sm-3">Lieu:</div>
                <div class="col-sm-9">Foyer du Mad</div>
              </div>
              <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9"></div>
              </div>
            </div>
            <div class="social">
              <ul>
                <li class="facebook" style="width:33%;">
                  <a href="https://www.facebook.com/">
                    <span class="fa fa-facebook"></span>
                  </a>
                </li>
                <li class="twitter" style="width:34%;">
                  <a href="https://twitter.com/">
                    <span class="fa fa-twitter"></span>
                  </a>
                </li>
                <!--<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-soundcloud"></span></a></li>-->
              </ul>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </div>
  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>