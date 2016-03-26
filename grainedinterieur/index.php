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
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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


      <section class="coupdecoeur">
        <h1>
          <div class="feuille1"></div>
          Coups de coeur de la Rédac
          <div class="feuille2"></div>
        </h1>
        <div class="row">
          <article class="col-md-5">
            <div>Shopping</div>
            <div>image</div>
            <div>
              <h2>Où acheter vos cactus ?</h2>
            </div>
          </article>
          <article class="col-md-5 col-md-offset-1">
            <div>Dossier</div>
            <div>image</div>
            <div>
              <h2>Décorez votre véranda</h2>
            </div>
          </article>
        </div>
      </section>

      <hr>


      <section class="participez">
        <h1>INSCRIVEZ-VOUS : PARTICIPEZ !</h1>
      </section>

      <hr>


      <section class="populaire">

        <h1>
          <div class="feuille1"></div>
          Les plus lus
          <div class="feuille2"></div>
        </h1>

        <div class="row">
          <article class="col-md-8">
            <div>DIY</div>
            <div>image</div>
            <div>
              <h2>Créez votre terrarium</h2>
            </div>
          </article>
          <article class="col-md-4">
            <div>Shopping</div>
            <div>image</div>
            <div>
              <h2>Tout sur les truelles ...</h2>
            </div>
          </article>
        </div>

        <div class="row">
          <article class="col-md-4">
            <div>Dossier</div>
            <div>image</div>
            <div>
              <h2>Les plantes rondes</h2>
            </div>
          </article>
          <article class="col-md-4">
            <div>Test</div>
            <div>image</div>
            <div>
              <h2>Quelle plante verte êtes-vous ?</h2>
            </div>
          </article>
          <article class="col-md-4">
            <div>Dossier</div>
            <div>image</div>
            <div>
              <h2>Les plantes rondes</h2>
            </div>
          </article>
        </div>
      </section>

      <hr>


      <section class="partenaire">

        <h1>
          <div class="feuille1"></div>
          Nos partenaires
          <div class="feuille2"></div>
        </h1>

        <div class="row">
          <article class="col-md-3">
            <div>image</div>
            <div>
              <h2>Nom partenaire</h2>
            </div>
          </article>
          <article class="col-md-3">
            <div>image</div>
            <div>
              <h2>Nom partenaire</h2>
            </div>
          </article>
          <article class="col-md-3">
            <div>image</div>
            <div>
              <h2>Nom partenaire</h2>
            </div>
          </article>
          <article class="col-md-3">
            <div>image</div>
            <div>
              <h2>Nom partenaire</h2>
            </div>
          </article>
        </div>
      </section>
    </div>
    <!--<div class="container">

      <div class="page-header">
        <h1>Bootstrap grid examples</h1>
        <p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>
      </div>

      <h3>Three equal columns</h3>
      <p>Get three equal-width columns <strong>starting at desktops and scaling to large desktops</strong>. On mobile devices, tablets and below, the columns will automatically stack.</p>
      <div class="row">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
      </div>

      <h3>Three unequal columns</h3>
      <p>Get three columns <strong>starting at desktops and scaling to large desktops</strong> of various widths. Remember, grid columns should add up to twelve for a single horizontal block. More than that, and columns start stacking no matter the viewport.</p>
      <div class="row">
        <div class="col-md-3">.col-md-3</div>
        <div class="col-md-6">.col-md-6</div>
        <div class="col-md-3">.col-md-3</div>
      </div>

      <h3>Two columns</h3>
      <p>Get two columns <strong>starting at desktops and scaling to large desktops</strong>.</p>
      <div class="row">
        <div class="col-md-8">.col-md-8</div>
        <div class="col-md-4">.col-md-4</div>
      </div>

      <h3>Full width, single column</h3>
      <p class="text-warning">No grid classes are necessary for full-width elements.</p>

      <hr>

      <h3>Two columns with two nested columns</h3>
      <p>Per the documentation, nesting is easy—just put a row of columns within an existing column. This gives you two columns <strong>starting at desktops and scaling to large desktops</strong>, with another two (equal widths) within the larger column.</p>
      <p>At mobile device sizes, tablets and down, these columns and their nested columns will stack.</p>
      <div class="row">
        <div class="col-md-8">
          .col-md-8
          <div class="row">
            <div class="col-md-6">.col-md-6</div>
            <div class="col-md-6">.col-md-6</div>
          </div>
        </div>
        <div class="col-md-4">.col-md-4</div>
      </div>

      <hr>

      <h3>Mixed: mobile and desktop</h3>
      <p>The Bootstrap 3 grid system has four tiers of classes: xs (phones), sm (tablets), md (desktops), and lg (larger desktops). You can use nearly any combination of these classes to create more dynamic and flexible layouts.</p>
      <p>Each tier of classes scales up, meaning if you plan on setting the same widths for xs and sm, you only need to specify xs.</p>
      <div class="row">
        <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
      </div>
      <div class="row">
        <div class="col-xs-6">.col-xs-6</div>
        <div class="col-xs-6">.col-xs-6</div>
      </div>

      <hr>

      <h3>Mixed: mobile, tablet, and desktop</h3>
      <p></p>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-8">.col-xs-12 .col-sm-6 .col-lg-8</div>
        <div class="col-xs-6 col-lg-4">.col-xs-6 .col-lg-4</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
      </div>

      <hr>

      <h3>Column clearing</h3>
      <p><a href="http://getbootstrap.com/css/#grid-responsive-resets">Clear floats</a> at specific breakpoints to prevent awkward wrapping with uneven content.</p>
      <div class="row">
        <div class="col-xs-6 col-sm-3">
          .col-xs-6 .col-sm-3
          <br>
          Resize your viewport or check it out on your phone for an example.
        </div>
        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>


        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
      </div>

      <hr>

      <h3>Offset, push, and pull resets</h3>
      <p>Reset offsets, pushes, and pulls at specific breakpoints.</p>
      <div class="row">
        <div class="col-sm-5 col-md-6">.col-sm-5 .col-md-6</div>
        <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">.col-sm-5 .col-sm-offset-2 .col-md-6 .col-md-offset-0</div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-5 col-lg-6">.col-sm-6 .col-md-5 .col-lg-6</div>
        <div class="col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0">.col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0</div>
      </div>
    </div>  /container -->

    <?php require("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>