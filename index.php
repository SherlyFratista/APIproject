<?php 
$url = file_get_contents ('http://pizzeria-valentino.herokuapp.com/api/orders');
$data = json_decode($url, true);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SI4108_1202173177_SherlyFratista_UTSIntegrasiAPI</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-default navbar-top">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-8 col-xs-12">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">
                    <img alt="Brand" class="img-responsive img-logo" width="50%" src="img/logo.jpg"> Sherly EAI
                  </a>
                </div>
              </div>



              <div class="col-md-8 col-sm-4 col-xs-12">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart text-btn-top"></span></a></li>
                  </ul>
                  <form action="search.php" method="get" role="search" class="navbar-form navbar-right">
                    <div class="form-group">
                      <input type="text" class="form-control form-top" placeholder="Type to search.." autofocus>
                    </div>
                    <button type="submit" class="btn btn-default btn-link btn-search-top text-btn-top"><span class="glyphicon glyphicon-search"></span></button>
                  </form>

                  <div class="clearfix"></div>

                  <ul class="nav navbar-nav navbar-right menu-top">
                    <li><a href="#">ORDER</a></li>
                    <li><a href="#">MENU</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">LOGIN</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
            </div>
            </div>
          </div><!-- /.container-fluid -->
        </nav>
    </div>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/slider/3.jpg" alt="Slide1">
      <div class="carousel-caption">
        Promo Diskon 30% Setiap Pembelian Pertama 
      </div>
    </div>
    <div class="item">
      <img src="img/slider/2.jpg" alt="Slider2">
      <div class="carousel-caption">
        Dapatkan Resep Pizza Menarik di website kami
      </div>
    </div>
    <div class="item">
      <img src="img/slider/1.jpg" alt="Slider3">
      <div class="carousel-caption">
        Hubungi Kami Untuk Informasi Selanjutnya
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container div-gallery-feed">
  <div class="row">
    <div class="col-md-12">
      <h3 class="title-gallery-feed">OUR GALLERIES</h3>
    </div>
  </div>
  <div class="row gallery-feed">
    <div class="col-md-4 col-sm-6 col-xs-6">
      <img class="img-responsive" src="img/instagram/1.jpg">
    </div>
    <div class="col-md-4 col-sm-6 col-xs-6">
      <img class="img-responsive" src="img/instagram/2.jpg">
    </div>
    <div class="col-md-4 col-sm-6 col-xs-6">
      <img class="img-responsive" src="img/instagram/3.jpg">
    </div>
  </div>
  <div class="center">
  <a href="#" class="more-gallery-feed">CHECK OUR INSTAGRAM</a>
  </div>
</div>

<div class="container div-articles">
  <div class="row div-single-articles">
    <div class="col-md-5">
      <img src="img/recent/1.jpg" class="img-responsive">
    </div>
    <div class="col-md-7">
      <div class="row">
        <div class="col-md-10 col-sm-10 col-xs-8">
          <h3 class="title-article"><a href="#">History Order</a></h3>
          <p class="author-article">by <a href="#">Sherly</a></p>
          <p class="comment-article"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;5</p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4">
          <div class="date-article">
          <p class="card-text text-center">Table :<?php echo $data[1]["Timestamp"]; ?></p>
          </div>
        </div>
      </div>

      <div class="row content-article">
        <div class="col-md-12">
        <p class="card-text text-center">Crust :<?php echo $data[1]["Crust"]; ?></p>
        <p class="card-text text-center">Flavor :<?php echo $data[1]["Flavor"]; ?></p>
        <p class="card-text text-center">Order_ID :<?php echo $data[1]["Order_ID"]; ?></p>
        <p class="card-text text-center">Size :<?php echo $data[1]["Size"]; ?></p>
        <p class="card-text text-center">Table :<?php echo $data[1]["Table_No"]; ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <center>
          <a href="#" class="read-more">Read Comments</a>
          </center>
        </div>
      </div>
    </div>
  </div>

  <div class="row div-single-articles">
    <div class="col-md-5">
      <img src="img/recent/3.jpg" class="img-responsive">
    </div>
    <div class="col-md-7">
      <div class="row">
        <div class="col-md-10 col-sm-10 col-xs-8">
          <h3 class="title-article"><a href="#">History Order</a></h3>
          <p class="author-article">by <a href="#">Fratista</a></p>
          <p class="comment-article"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;7</p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4">
          <div class="date-article">
          <p class="card-text text-center">Table :<?php echo $data[2]["Timestamp"]; ?></p>
          </div>
        </div>
      </div>

      <div class="row content-article">
        <div class="col-md-12">
        <p class="card-text text-center">Crust :<?php echo $data[2]["Crust"]; ?></p>
        <p class="card-text text-center">Flavor :<?php echo $data[2]["Flavor"]; ?></p>
        <p class="card-text text-center">Order_ID :<?php echo $data[2]["Order_ID"]; ?></p>
        <p class="card-text text-center">Size :<?php echo $data[2]["Size"]; ?></p>
        <p class="card-text text-center">Table :<?php echo $data[2]["Table_No"]; ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <center>
          <a href="#" class="read-more">Read Comments</a>
          </center>
        </div>
      </div>
    </div>
  </div>

    <div class="row">
    <center>
        <div class="col-md-12">
          <a href="#" class="read-more">See More</a>
        </div>
    </center>
      </div>
    </div>
  </div>
</div>

<div class="footer">
  <div class="container">
    <div class="row footer-div">
      <div class="col-md-4">
        <h4 class="title-footer">Newsletter</h4>
        <p><strong>Sign up to our newsletter</strong></p>
        <form class="form-newsletter">
          <div class="input-group">
          <input type="email" class="form-control form-bottom" placeholder="Type your email here">
          <span class="input-group-btn">
          <button class="btn btn-default btn-search-bottom" type="button"><strong>GO</strong></button>
          </span>
          </div>
        </form>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h4 class="title-footer">More Info</h4>
        <ul class="list-unstyled list-contact">
          <li><a href="#">How to order pizza</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Shipping</a></li>
          <li><a href="#">Membership</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4 class="title-footer">Contact Author Sherly</h4>
        <p><strong>Sherly Fratista - UTS INDIVIDU (EAI)</strong></p>
      </div>
    </div>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>