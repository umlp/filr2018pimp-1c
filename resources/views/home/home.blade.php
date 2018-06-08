@extends('template')

@section('titre')
  Evenements
@endsection

@section('head')
  <link href='//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://parrainage.herokuapp.com/css/evenement.css">
  <script type='text/javascript' src='//code.jquery.com/jquery-1.11.1.min.js'></script>
  <script type='text/javascript' src='//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js'></script>
  <script type='text/javascript'></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection

@section('contenu')
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
                <div class="col-sm-9">XX XX XXXX(XX:XX)</div>
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
              
        </ul>
      </div>
    </div>
  </div>
@endsection
