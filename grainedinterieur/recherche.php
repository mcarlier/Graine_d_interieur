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
    <div class="container backWhite">

      <ol class="breadcrumb">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="recherche.php">Recherche</a></li>
        <li class="active">Cactus</li>
      </ol>

      <form class="row formSearch" role="search">
        <input type="text" class="col-md-4 col-md-offset-1 cactus" placeholder="  Cactus"> <!-- form-control -->
        <button type="submit" class="btn btn-default glyphicon glyphicon-search recherche-btn" formaction="recherche.php"></button>
      </form>

      <div class="col-md-4 blog-sidebar petitNone">
        <h2 class="darkVioletColor">4 résultats</h2>
        <div class="sidebar-module sidebar-module-inset filtres">
          <div class="feuille2 inline-block"></div>
          <h4 class="inline-block">Vos choix</h4>
          <a class="inline-block darkVioletColor text-right">supprimer tout</a>
          <p>Tous les résultats de recherche pour "cactus".</p>

          <div class="feuille2 inline-block"></div>
          <h4 class="inline-block">Filtrez</h4>

          <form>
            <p><input type="checkbox"> Boutique</p>
            <p><input type="checkbox"> Bon Plan</p>
            <p><input type="checkbox"> Conseil</p>
            <p><input type="checkbox"> Couleur</p>
            <p><input type="checkbox"> Curiosité</p>
            <p><input type="checkbox"> DIY</p>
            <p><input type="checkbox"> Dossier</p>
            <p><input type="checkbox"> Lumière</p>
            <p><input type="checkbox"> Pot</p>
            <p><input type="checkbox"> Scandinave</p>
            <p><input type="checkbox"> Shopping</p>
            <p><input type="checkbox"> Test</p>
          </form>
        </div>
      </div>
      <!-- :::::::::::::::::FIN:::SIDEBAR:::::::::::::::::: -->


      <div class="col-md-8 recherche-main">

        <div class="trierPar blueBack07 row text-center">
          <div class="col-md-2 cat">Trier par</div>
          <div class="col-md-2 cat"><a>Rubrique</a></div>
          <div class="col-md-4 cat">
            <a>Plus vus</a>
            <span class="glyphicon glyphicon-triangle-top whiteColor"></span>
            <span class="glyphicon glyphicon-triangle-bottom whiteColor"></span>
          </div>
          <div class="col-md-4 cat">
            <a>Date de sortie</a>
            <span class="glyphicon glyphicon-triangle-top whiteColor"></span>
            <span class="glyphicon glyphicon-triangle-bottom whiteColor"></span>
          </div>

        </div>

          <div class="row">
            <div class="col-md-4"><hr class="hrRecherche darkVioletBack"></div>
            <div class="col-md-4"><h3 class="text-center darkVioletColor">Conseil</h3></div>
            <div class="col-md-4"><hr class="hrRecherche darkVioletBack"></div>
          </div>

          <h3 class="text-center"></h3>
          <div class="row">
            <article class="col-md-10 col-md-offset-1">
              <div class="cac2">
                <a href="article.php"><h2 class="darkVioletBack07">Quel cactus pour quel intérieur ?</h2></a>
              </div>
            </article>
          </div>


          <div class="row">
            <div class="col-md-4 "><hr class="hrRecherche lightGreenBack"></div>
            <div class="col-md-4"><h3 class="text-center lightGreenColor">DIY</h3></div>
            <div class="col-md-4"><hr class="hrRecherche lightGreenBack"></div>
          </div>

          <div class="row">
              <p class="text-center">Pas de résultat</p>
          </div>


          <div class="row">
            <div class="col-md-4 "><hr class="hrRecherche blueBack"></div>
            <div class="col-md-4"><h3 class="text-center blueColor">Shopping</h3></div>
            <div class="col-md-4"><hr class="hrRecherche blueBack"></div>
          </div>

          <div class="row">
            <article class="col-md-10 col-md-offset-1">
              <div class="cac1">
                <a href="article.php"><h2 class="blueBack07">Où acheter vos cactus ?</h2></a>
              </div>
            </article>
          </div>
          <div class="row">
            <article class="col-md-10 col-md-offset-1">
              <div class="cac1">
                <a href="article.php"><h2 class="blueBack07">Où acheter vos cactus ?</h2></a>
              </div>
            </article>
          </div>


          <div class="row">
            <div class="col-md-4 "><hr class="hrRecherche darkGreenBack"></div>
            <div class="col-md-4"><h3 class="text-center darkGreenColor">Dossiers</h3></div>
            <div class="col-md-4"><hr class="hrRecherche darkGreenBack"></div>
          </div>
          <div class="row">
            <p class="text-center">Pas de résultat</p>
          </div>

          <div class="row">
            <div class="col-md-4 "><hr class="hrRecherche lightVioletBack"></div>
            <div class="col-md-4"><h3 class="text-center lightVioletColor">Tests</h3></div>
            <div class="col-md-4"><hr class="hrRecherche lightVioletBack"></div>
          </div>
          <div class="row">
            <article class="col-md-10 col-md-offset-1">
              <div class="cac1">
                <a href="article.php"><h2 class="lightVioletBack07">Associez chaque pot à son cactus.</h2></a>
              </div>
            </article>
          </div>

      </div>

    </div>


    <?php require("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>