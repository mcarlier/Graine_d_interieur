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


      <section class="container backWhite">
        <ol class="breadcrumb">
          <li><a href="index.php">Accueil</a></li>
          <li class="active"></a>À propos</li>
        </ol>
        <div class="titreh1">
          <div class="feuille1"></div>
          <h1 class="backWhite">Qui sommes-nous ?</h1>
          <div class="feuille2"></div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2 presentationJournal">
            Présentation du journal<br>
            Graine d'intérieur est le seul magazine en ligne à fournir des conseils.<br>
            Graine d'intérieur est le seul magazine en ligne à fournir des conseils.
            Graine d'intérieur est le seul magazine en ligne à fournir des conseils.
            Graine d'intérieur est le seul magazine en ligne à fournir des conseils.<br>
            Graine d'intérieur est le seul magazine en ligne à fournir des conseils.
            Graine d'intérieur est le seul magazine en ligne à fournir des conseils.<br>
            Graine d'intérieur est le seul magazine en ligne à fournir des conseils.
            Graine d'intérieur est le seul magazine en ligne à fournir des conseils.<br>
            Graine d'intérieur est le seul magazine en ligne à fournir des conseils.
            Graine d'intérieur est le seul magazine en ligne à fournir des conseils.
          </div>
        </div>
    </section>
      <div class="redaction">
        <section class="container">
          <div class="titreh1">
            <div class="feuille1"></div>
            <h1>La Rédaction</h1>
            <div class="feuille2"></div>
          </div>
          <div class="row">
            <div class="col-md-3 col-md-offset-1 containerRedaction">
              <img src="./images/a_propos/Alice.jpg" alt="Alice">
              <div class="contenuRedaction">
                <p class="nom">Alice Maixent</p>
                <div class="heightDesc">Développeuse de l'extrême et gardienne de licornes</div>
              </div>

            </div>
            <div class="col-md-3 col-md-offset-1 containerRedaction">
              <img src="./images/a_propos/Nancy.jpg" alt="Nancy">
              <div class="contenuRedaction">
                <p class="nom">Nancy Radjaya</p>
                <div class="heightDesc">Community manager de folie et propriétaire de Stitch</div>
              </div>
            </div>
            <div class="col-md-3 col-md-offset-1 containerRedaction">
              <img src="./images/a_propos/maelle.jpg" alt="Maëlle">
              <div class="contenuRedaction">
                <p class="nom">Maëlle Carlier</p>
                <div class="heightDesc">Web designeuse professionnelle et fan de galaxies</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="contact">

      <section class="container">
          <div class="titreh1">
            <div class="feuille1"></div>
            <h1>Contactez nous !</h1>
            <div class="feuille2"></div>
          </div>
          <form class="form-horizontal" role="form" method="post" action="index.php">
              <div class="form-group">
                  <!-- <label for="email" class="col-sm-2 control-label">Email</label> -->
                  <div class="col-sm-4 col-sm-offset-2">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="">
                  </div>
              </div>
              <div class="form-group">
                  <!-- <label for="message" class="col-sm-2 control-label">Message</label> -->
                  <div class="col-sm-8 col-sm-offset-2">
                      <textarea id="message" class="form-control" rows="4" name="message">Message</textarea>
                  </div>
              </div>
              <div class="form-group ">
                <div class="checkbox col-sm-offset-2 col-sm-8">
                  <label><input type="checkbox">Je ne suis pas un robot.</label>
                </div>
              </div>
              <div class="form-group">
                <!-- <input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary"> -->
                <div class="col-sm-8 col-sm-offset-2">
                  <button class="btn boutonFeuille">
                    <div class="feuille3"></div>
                    Envoyer
                    <div class="feuille4"></div>
                  </button>
                </div>

              </div>
          </form>
        </section>
      </div>

    <?php require("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>