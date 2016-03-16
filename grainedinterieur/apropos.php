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

      <h1>A propos</h1>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
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

      <h1>La Rédaction</h1>
      <div class="row">
        <div class="col-md-3 col-md-offset-1">
          <p>Image</p>
          <p>Alice</p>
          <p>Développeuse de l'extrême et gardienne de licornes</p>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <p>Image</p>
          <p>Nancy</p>
          <p>Community manager de folie et propriétaire de Stitch</p>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <p>Image</p>
          <p>Maëlle</p>
          <p>Web designeuse professionnelle et fan de galaxies</p>
        </div>
      </div>

      <h1>Contactez nous !</h1>
<form class="form-horizontal" role="form" method="post" action="index.php">
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="exemple@domaine.com" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Votre réponse">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
        </div>
    </div>
</form>

    </div>


    <?php require("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>