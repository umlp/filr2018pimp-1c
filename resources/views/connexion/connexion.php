<!DOCTYPE HTML>
<html>
  <head>
    <title>Connexion</title>
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="/home/manzambi/Bureau/ASI 3.2/UML/html/fontawesome-free-5.0.11/web-fonts-with-css/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <style>
    #menu-vertical ul{
      margin: 0;
      padding: 0;
      position: fixed;
      width: 150px;
      background-color: #f1f1f1;
      top: 0px;
      height: 100%;
      overflow: auto;
    }

    #menu-vertical li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
    }

    #menu-vertical ul li {
      list-style:none;
      text-align: center;
    }

    #menu-vertical a:hover:not(.active){
      background-color: #555;
        color: white;
    }

    #menu-vertical a.active{
      background-color: #4CAF50;
      color: white;
    }
    /*Bouton*/
    .bouton{
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        position: relative;
        top: 30px;
        list-style: none;
    }

    /*Bannière*/
    body.is-loading #banniere > .inner{
      opacity: 0;
      /* -moz-transform:translateY(1em);
      -webkit-transform : translateY(1em);
      -ms-transform:translateY(1em);
      transform: translateY(1em); */
    }

    #banniere{
      display: -ms-flexbox;
      -ms-flex-pack: center;
      -ms-flex-align:center;
      padding : 8em 0 6em 0;
      -moz-align-items:center;
      -webkit-align-items : center;
      -ms-align-items:center;
      align-items: center;
      display: -moz-flex;
      display: -webkit-flex;
      display : -ms-flex;
      display: flex;
      -moz-justify-content:center;
      -webkit-justify-content:center;
      -ms-justify-content:center;
      justify-content: center;
      min-height: 60vh;
      height: 60vh
      position :relative;
      background: black;
      background-image: url(https://www.tendanceouest.com/photos/maxi/225295.jpg);
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-position: center;
      text-align: center;
      color: white;
    }

    #banniere:before {
          -moz-transition: opacity 3s ease;
          -webkit-transition: opacity 3s ease;
          -ms-transition: opacity 3s ease;
          transition: opacity 3s ease;
          -moz-transition-delay: 0.25s;
          -webkit-transition-delay: 0.25s;
          -ms-transition-delay: 0.25s;
          transition-delay: 0.25s;
          content: '';
          display: block;
          background-color: #000;
          height: 100%;
          left: 0;
          opacity: 0.65;
          position: absolute;
          top: 0;
          width: 100%;
          z-index: 1;
        }

        #banniere .inner {
          /* -moz-transform: none;
          -webkit-transform: none;
          -ms-transform: none;
          transform: none;
          -moz-transition: opacity 1s ease, transform 1s ease;
          -webkit-transition: opacity 1s ease, transform 1s ease;
          -ms-transition: opacity 1s ease, transform 1s ease;
          transition: opacity 1s ease, transform 1s ease; */
          position: relative;
          opacity: 1;
          z-index: 3;
          /*padding:  0em;*/
        }
        #banniere li{
          list-style: none;
        }

        #banniere h1 {
          font-size: 4em;
          line-height: 1em;
          margin: 0 0 0.5em 0;
          padding: 0;
          color: #FFF;
        }

        #banniere p {
          font-size: 1.5em;
          margin-bottom: 1.75em;
        }

        #banniere a {
          color: #FFF;
          text-decoration: none;
        }

        @media screen and (max-width: 1280px) {

          #banniere h1 {
            font-size: 3.5em;
          }

        }

        @media screen and (max-width: 736px) {

          #banniere {
            background-attachment: scroll;
          }

            #banniere h1 {
              font-size: 2.25em;
            }

            #banniere p {
              font-size: 1.25em;
            }

        }
    /*main*/

    #main{
      margin-left: 25%;
      padding: 1px 1px;
      height: 100%;
    }

    </style>
  </head>
  <body>
    <!-- Bannière -->
    <section id="banniere">
      <div class="inner">
        <h1>Parrainage</h1>
        <p>Site de rencontre fillot/parrain n°1</p>
        <form action="GET">
          <fieldset>
            <legend>Connexion</legend>
            <table>
              <tr>
                <td><label> Nom d'utilisateur :</label></td>
                <td><input type="text" class="box"name = "nom" id="nom" placeholder="Nom utilisateur"></td>
              </tr>
              <tr>
                <td><label>Mot de passe :</label></td>
                <td><input type="password" class="box"name = "password" id="password" placeholder="Mot de passe"></td>
              </tr>
            </table>
          </fieldset>
          <a href="home.html" class="bouton">Connexion</a>
        </form>
      </div>
    </section>
  </body>
</html>
