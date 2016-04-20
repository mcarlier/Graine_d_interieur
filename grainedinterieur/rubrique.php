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
        <li class="active">Tests</li>
      </ol>

      <div class="titreh1">
        <div class="feuille1"></div>
        <h1 class="backWhite">Les derniers articles</h1>
        <div class="feuille2"></div>
      </div>

      <div class="col-md-9 blog-main rubrique-main">
        <div class="row">
          <article class="col-md-12 petitNone">
            <div class="testArt1">
              <a href="article.php"><h2>Quelle plante verte êtes-vous ?</h2></a>
            </div>
          </article>
        </div>


        <div class="row">
          <div class="col-md-6 petitNone">
            <article class="rubrique2">
              <div class="testArt2">
                <a href="article.php"><h2>Associez chaque pot <br> à son cactus</h2></a>
              </div>
            </article>
            <article class="rubrique2">
              <div class="testArt2">
                <a href="article.php"><h2>Associez chaque pot <br> à son cactus</h2></a>
              </div>
            </article>

          </div>

          <article class="col-md-6 petitNone">
            <div class="testArt1">
              <a href="article.php"><h2>Quelle plante verte êtes-vous ?</h2></a>
            </div>
          </article>

          <div class="row">
            <article class="col-xs-12 grandNone">
              <div class="testArt1">
                <a href="article.php"><h2>Quelle plante verte êtes-vous ?</h2></a>
              </div>
            </article>
          </div>


          <div class="row grandNone">
            <article class="grandNone col-xs-12">
              <div class="testArt2">
                <a href="article.php"><h2>Associez chaque pot <br> à son cactus</h2></a>
              </div>
            </article>
          </div>
          <div class="row grandNone ">
            <article class="col-xs-12">
              <div class="testArt2">
                <a href="article.php"><h2>Associez chaque pot <br> à son cactus</h2></a>
              </div>
            </article>
          </div>
          <div class="row grandNone">
            <article class="col-md-6 col-xs-12">
              <div class="testArt3">
                <a href="article.php"><h2>Saurez-vous assortir chaque plante <br class="petitNone"> à son meuble ?</h2></a>
              </div>
            </article>
          </div>

        </div>

        <button class="btn boutonFeuille">
          <div class="feuille3"></div>
          Voir plus
          <div class="feuille4"></div>
        </button>
      </div> <!-- Fin main -->

        <!-- :::::::::::::::::::::::::::::::::::SIDEBAR:::::::::::::::::: -->

      <div class="col-md-3 blog-sidebar petitNone">
        <div class="sidebar-module sidebar-module-inset rubriqueSidebar">
          <h2>Les plus populaires</h2>
          <article class="row">
            <a href="article.php">
              <div class="test1">
                <h4 class="whiteColor">Quel cactus <br> êtes-vous ?</h4>
              </div>
            </a>
          </article>

          <article class="row">
            <a href="article.php">
              <div class="test2">
                <h4 class="whiteColor">Quel cactus <br> êtes-vous ?</h4>
              </div>
            </a>
          </article>
        </div>

        <div class="sideBarbie rubriqueSidebar">
          <img src="./images/pub/barbipub.png" alt="Barbicoiffure" class="barbiPub">
        </div>
      </div><!-- /.blog-sidebar 1 -->

    </div>


    <?php require("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>