<!DOCTYPE HTML>
<html>
  <head>
    <title>Inscription</title>
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/style.css"/>
    {!! Html::style('css/style.css') !!}
    <link rel="stylesheet" href="/home/manzambi/Bureau/ASI 3.2/UML/html/fontawesome-free-5.0.11/web-fonts-with-css/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  </head>
  <body>
    <!-- Bannière -->
    <section id="banniere">
      <div class="inner">
        <h1>Parrainage</h1>
        <p>Site de rencontre fillot/parrain n°1</p>
        <form action="GET">
          <fieldset>
            <legend>Inscritption</legend>
            <table>
              <tr>
                <td><label>E-mail :</label></td>
                <td><input type="email" class="box" name="Email" placeholder="Em@il"></td>
              </tr>
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
          <a href="connexion.html" class="bouton">Inscription</a>
        </form>
      </div>
    </section>
  </body>
</html>
