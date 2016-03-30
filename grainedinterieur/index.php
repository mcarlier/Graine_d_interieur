<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require("head.php"); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <?php require("header.php"); ?>

    <div class="container">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide" src="./images/accueil/Nouveau.jpg" alt="First slide">
            <div class="container">
              <div class="rub">Conseils</div>
              <div class="carousel-caption">
                <h1>Mettez vos plantes en bocaux</h1>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="second-slide" src="./images/accueil/Nouveau.jpg" alt="Second slide">
            <div class="container">
              <div class="rub">Conseils</div>
              <div class="carousel-caption">
                <h1>Mettez vos plantes en bocaux</h1>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="third-slide" src="./images/accueil/Nouveau.jpg" alt="Third slide">
            <div class="container">
              <div class="rub">Conseils</div>
              <div class="carousel-caption">
                <h1>Mettez vos plantes en bocaux</h1>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>

    <div class="coupdecoeur accueil">
      <section class="container">

        <div class="titreh1">
          <div class="feuille1"></div>
          <h1>Coups de coeur de la Rédac</h1>
          <div class="feuille2"></div>
        </div>

        <div class="row">
          <article class="col-md-5">
            <div class="rub">Shopping</div>
            <div class="cdc1">
              <h2>Où acheter vos cactus ?</h2>
            </div>
          </article>
          <article class="col-md-5 col-md-offset-1">
            <div class="rub">Dossier</div>
            <div class="cdc2">
              <h2>Décorez votre véranda</h2>
            </div>
          </article>
        </div>

      </section>
    </div>



    <section class="participez">
      <h1 class="titreh1">
        <div class="feuille2"></div>INSCRIVEZ-VOUS <div class="feuille2"></div> PARTICIPEZ ! <div class="feuille2"></div>
      </h1>
    </section>



    <div class="container accueil">
      <section class="populaire">
        <div class="titreh1">
          <div class="feuille1"></div>
          <h1>Les plus lus</h1>
          <div class="feuille2"></div>
        </div>

        <div class="row">
          <article class="col-md-8">
            <div class="rub">DIY</div>
            <div class="pop1">
              <h2>Créez votre terrarium</h2>
            </div>
          </article>
          <article class="col-md-4">
            <div class="rub">Shopping</div>
            <div class="pop2">
              <h2>Tout sur les truelles ...</h2>
            </div>
          </article>
        </div>

        <div class="row">
          <article class="col-md-4">
            <div class="rub">Dossier</div>
            <div class="pop3">
              <h2>Les plantes rondes</h2>
            </div>
          </article>
          <article class="col-md-4">
            <div class="rub">Test</div>
            <div class="pop4">
              <h2>Quelle plante verte êtes-vous ?</h2>
            </div>
          </article>
          <article class="col-md-4">
            <div class="rub">Dossier</div>
            <div class="pop5">
              <h2>Les plantes rondes</h2>
            </div>
          </article>
        </div>
      </section>
    </div>



    <div class="partenaire accueil">
      <section class="container">

        <div class="titreh1">
          <div class="feuille1"></div>
          <h1>Nos partenaires</h1>
          <div class="feuille2"></div>
        </div>

        <div class="row">
          <article class="col-md-3">
            <div class="par1">
              <h2>Rendez-lui visite !</h2>
            </div>
          </article>
          <article class="col-md-3">
            <div class="par2">
              <h2>Rendez-lui visite !</h2>
            </div>
          </article>
          <article class="col-md-3">
            <div class="par3">
              <h2>Rendez-lui visite !</h2>
            </div>
          </article>
          <article class="col-md-3">
            <div class="par4">
              <h2>Rendez-lui visite !</h2>
            </div>
          </article>
        </div>
      </section>
    </div>

    <?php require("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>