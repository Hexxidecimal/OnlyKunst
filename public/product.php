<?php 
  $mysqli = new MySQLi ("localhost", "root", "", "OnlyKunst");
  if(mysqli_connect_errno()){trigger_error('Fout bij verbinding: '.$mysqli->error);}
  else{
    $sql = "SELECT ArtikelID, ArtikelNaam, ArtikelFoto, ArtikelPrijs FROM tblArtikel";
    if($stmt = $mysqli->prepare($sql)){
      if(!$stmt->execute()){
        echo 'Het uitvoeren van de query is mislukt: '.$stmt->error.'in query: '.$sql;
      }
      else{
        $stmt->bind_result($ArtikelID, $ArtikelNaam, $ArtikelFoto, $ArtikelPrijs);
        while($stmt->fetch()){
          $artNaam[$ArtikelID] = $ArtikelNaam;
          $artFoto[$ArtikelID] = $ArtikelFoto;
          $artPrijs[$ArtikelID] = round($ArtikelPrijs,2);
        }
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>OnlyKunst | Kunst only for you</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link href="assets/css/theme-custom.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="index.php"><img class="d-inline-block" src="assets/img/logo.png" alt="logo" /><span class="text-1000 fs-0 fw-bold ms-2">OnlyKunst</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#collection">Populairste verkopers</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#outlet">Per categorie</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="product_add.php">Voeg product toe</a></li>
            </ul>
            <form class="d-flex">
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Zoeken
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="search_products.php">Artikelen</a></li>
                    <li><a class="dropdown-item" href="search_users.php">Gebruikers</a></li>
                    <li><a class="dropdown-item" href="search_activities.php">Activiteiten</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <span class="d-block d-lg-none"><a class="text-1000" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg class="feather feather-search me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="11" cy="11" r="8"></circle>
                  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="search_products.php">Artikelen</a></li>
                    <li><a class="dropdown-item" href="search_users.php">Gebruikers</a></li>
                    <li><a class="dropdown-item" href="search_activities.php">Activiteiten</a></li>
                  </ul>
              </a></span>
            <a class="text-1000" href="contact.php">
                <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg></a><a class="text-1000" href="product.php">
                <svg class="feather feather-shopping-cart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="9" cy="21" r="1"></circle>
                  <circle cx="20" cy="21" r="1"></circle>
                  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg></a><a class="text-1000" href="login.php">
                <svg class="feather feather-user me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg></a><a class="text-1000" href="#!">
                <svg class="feather feather-heart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                </svg></a></form>
          </div>
        </div>
      </nav>
      <section class="py-11 bg-light-gradient border-bottom border-white border-5">
        <div class="bg-holder overlay overlay-light" style="background-image:url(assets/img/gallery/image3.jpeg);background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-12 mb-10">
              <div class="d-flex align-items-center flex-column">
                <h1 class="fw-normal">Kunst voor iedereen.</h1>
                <h1 class="fs-4 fs-lg-8 fs-md-6 fw-bold">Gemaakt door de mensen zelf.</h1>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">

        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Populairste Artikelen</h5>
            </div><?php $artNumber = 1 ?>
            <div class="col-12">
              <div class="carousel slide" id="carouselBestDeals" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?php echo $artFoto[$artNumber]; ?>" alt="<?php echo $artNaam[$artNumber]; ?>" />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate"><?php echo $artNaam[$artNumber]; ?></h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">€<?php echo $artPrijs[$artNumber]; ?></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div><?php $artNumber++ ?>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?php echo $artFoto[$artNumber]; ?>" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate"><?php echo $artNaam[$artNumber]; ?></h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">€<?php echo $artPrijs[$artNumber]; ?></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div><?php $artNumber++ ?>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?php echo $artFoto[$artNumber]; ?>" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate"><?php echo $artNaam[$artNumber]; ?></h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">€<?php echo $artPrijs[$artNumber]; ?></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div><?php $artNumber++ ?>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?php echo $artFoto[$artNumber]; ?>" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate"><?php echo $artNaam[$artNumber]; ?></h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">€<?php echo $artPrijs[$artNumber]; ?></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div><?php $artNumber++ ?>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?php echo $artFoto[$artNumber]; ?>" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate"><?php echo $artNaam[$artNumber]; ?></h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">€<?php echo $artPrijs[$artNumber]; ?></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div><?php $artNumber++ ?>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?php echo $artFoto[$artNumber]; ?>" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate"><?php echo $artNaam[$artNumber]; ?></h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">€<?php echo $artPrijs[$artNumber]; ?></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div><?php $artNumber++ ?>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?php echo $artFoto[$artNumber]; ?>" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate"><?php echo $artNaam[$artNumber]; ?></h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">€<?php echo $artPrijs[$artNumber]; ?></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div><?php $artNumber++ ?>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?php echo $artFoto[$artNumber]; ?>" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate"><?php echo $artNaam[$artNumber]; ?></h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">€<?php echo $artPrijs[$artNumber]; ?></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div><?php $artNumber++ ?>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?php echo $artFoto[$artNumber]; ?>" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate"><?php echo $artNaam[$artNumber]; ?></h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">€<?php echo $artPrijs[$artNumber]; ?></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div><?php $artNumber++ ?>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?php echo $artFoto[$artNumber]; ?>" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate"><?php echo $artNaam[$artNumber]; ?></h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">€<?php echo $artPrijs[$artNumber]; ?></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">nog geen items</h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">nog geen prijs gekozen</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">nog geen items</h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">nog geen prijs gekozen</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">nog geen items</h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">nog geen prijs gekozen</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">nog geen items</h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">nog geen prijs gekozen</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">nog geen items</h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">nog geen prijs gekozen</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">nog geen items</h5>
                            <div class="fw-bold"><span class="text-600 me-2 ">nog geen prijs gekozen</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBestDeals" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselBestDeals" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
        <br>
        <br>
        <br>
        <br>
      <!-- ============================================-->
      
      <!-- ============================================-->


      <section class="py-0">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fs-3 fs-lg-5 lh-sm mb-3">Populairste Verkopers</h5>
            </div>
            <div class="col-12">
              <div class="carousel slide" id="carouselNewArrivals" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/pfpdefault.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">

                            <p class="text-400 fs-1">nog niet gekozen</p>
                            <h4 class="text-light">naam nog niet gekozen</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                  </div>
                </div>
              </div>
              <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
            </div>
      </section>
      <section id="categoryWomen">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Winkel per categorie</h5>
              <h6 class="fw-bold fs-2 fs-lg-4 lh-sm mb-2">Hier de populairste van alle categoriën</h6>
            </div>
            <div class="col-12">
              <nav>
                <div class="nav nav-tabs majestic-tabs mb-4 justify-content-center" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-women-tab" data-bs-toggle="tab" data-bs-target="#nav-women" type="button" role="tab" aria-controls="nav-women" aria-selected="true">abstract</button>
                  <button class="nav-link" id="nav-men-tab" data-bs-toggle="tab" data-bs-target="#nav-men" type="button" role="tab" aria-controls="nav-men" aria-selected="false">realistisch</button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-women" role="tabpanel" aria-labelledby="nav-women-tab">
                    <ul class="nav nav-pills justify-content-center mb-5" id="pills-tab-women" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-wtshirt-tab" data-bs-toggle="pill" data-bs-target="#pills-wtshirt" type="button" role="tab" aria-controls="pills-wtshirt" aria-selected="true">beeldhouwkunst</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-dresses-tab" data-bs-toggle="pill" data-bs-target="#pills-dresses" type="button" role="tab" aria-controls="pills-dresses" aria-selected="false">schilderijen</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wshoes-tab" data-bs-toggle="pill" data-bs-target="#pills-wshoes" type="button" role="tab" aria-controls="pills-wshoes" aria-selected="false">fotografie</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wwatch-tab" data-bs-toggle="pill" data-bs-target="#pills-wwatch" type="button" role="tab" aria-controls="pills-wwatch" aria-selected="false">mixed media </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wsunglasses-tab" data-bs-toggle="pill" data-bs-target="#pills-wsunglasses" type="button" role="tab" aria-controls="pills-wsunglasses" aria-selected="false">tekenkunst </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wbagpacks-tab" data-bs-toggle="pill" data-bs-target="#pills-wbagpacks" type="button" role="tab" aria-controls="pills-wbagpacks" aria-selected="false">overige</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContentWomen">
                      <div class="tab-pane fade" id="pills-dresses" role="tabpanel" aria-labelledby="pills-dresses-tab">
                        <div class="carousel slide" id="carouselCategoryDresses" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryDresses" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryDresses" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade show active" id="pills-wtshirt" role="tabpanel" aria-labelledby="pills-wtshirt-tab">
                        <div class="carousel slide" id="carouselCategoryWTshirt" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWTshirt" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWTshirt" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-wshoes" role="tabpanel" aria-labelledby="pills-wshoes-tab">
                        <div class="carousel slide" id="carouselCategoryWShoes" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWShoes" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWShoes" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-wwatch" role="tabpanel" aria-labelledby="pills-wwatch-tab">
                        <div class="carousel slide" id="carouselCategoryWwatch" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWwatch" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWwatch" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-wsunglasses" role="tabpanel" aria-labelledby="pills-wsunglasses-tab">
                        <div class="carousel slide" id="carouselCategoryWSunglasses" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWSunglasses" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWSunglasses" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-wbagpacks" role="tabpanel" aria-labelledby="pills-wbagpacks-tab">
                        <div class="carousel slide" id="carouselCategoryWBagpacks" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWBagpacks" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWBagpacks" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-men" role="tabpanel" aria-labelledby="nav-men-tab">
                    <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab-men" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-tshirt-tab" data-bs-toggle="pill" data-bs-target="#pills-tshirt" type="button" role="tab" aria-controls="pills-tshirt" aria-selected="true">beeldhouwkunst</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-shirt-tab" data-bs-toggle="pill" data-bs-target="#pills-shirt" type="button" role="tab" aria-controls="pills-shirt" aria-selected="false">schilderijen</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-shoes-tab" data-bs-toggle="pill" data-bs-target="#pills-shoes" type="button" role="tab" aria-controls="pills-shoes" aria-selected="false">fotografie</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-watch-tab" data-bs-toggle="pill" data-bs-target="#pills-watch" type="button" role="tab" aria-controls="pills-watch" aria-selected="false">mixed media </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-sunglasses-tab" data-bs-toggle="pill" data-bs-target="#pills-sunglasses" type="button" role="tab" aria-controls="pills-sunglasses" aria-selected="false">teken kunst </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-bagpacks-tab" data-bs-toggle="pill" data-bs-target="#pills-bagpacks" type="button" role="tab" aria-controls="pills-bagpacks" aria-selected="false">overige </button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContentMen">
                      <div class="tab-pane fade show active" id="pills-tshirt" role="tabpanel" aria-labelledby="pills-tshirt-tab">
                        <div class="carousel slide" id="carouselCategoryTshirt" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryTshirt" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryTshirt" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-shirt" role="tabpanel" aria-labelledby="pills-shirt-tab">
                        <div class="carousel slide" id="carouselCategoryShirt" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryShirt" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryShirt" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-shoes" role="tabpanel" aria-labelledby="pills-shoes-tab">
                        <div class="carousel slide" id="carouselCategoryShoes" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryShoes" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryShoes" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-watch" role="tabpanel" aria-labelledby="pills-watch-tab">
                        <div class="carousel slide" id="carouselCategoryWatch" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWatch" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWatch" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-sunglasses" role="tabpanel" aria-labelledby="pills-sunglasses-tab">
                        <div class="carousel slide" id="carouselCategorySunglasses" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategorySunglasses" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategorySunglasses" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-bagpacks" role="tabpanel" aria-labelledby="pills-bagpacks-tab">
                        <div class="carousel slide" id="carouselCategoryBagpacks" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/2Q.png" alt="..." />
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryBagpacks" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryBagpacks" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <section class="py-0 pt-7">
        <div class="container">
          <div class="row">
            <div class="col-6 col-lg-2 mb-3">
              <h5 class="lh-lg fw-bold text-1000">Company Info</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">About Us</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Affiliate</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Fashion Blogger</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5 class="lh-lg fw-bold text-1000">Help &amp; Support</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Shipping Info</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Refunds</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">How to Order</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">How to Track</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Size Guides</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5 class="lh-lg fw-bold text-1000">Customer Care</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Contact Us</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Payment Methods</a></li>
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Bonus Point</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-auto ms-auto">
              <h5 class="lh-lg fw-bold text-1000">Signup For The Latest News</h5>
              <div class="row input-group-icon mb-5">
                <div class="col-12">
                  <input class="form-control input-box" type="email" placeholder="Enter Email" aria-label="email" />
                  <svg class="bi bi-arrow-right-short input-box-icon" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="#424242" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                  </svg>
                </div>
              </div>
              <p class="text-800">
                <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg><span class="text-800">+3930219390</span>
              </p>
              <p class="text-800">
                <svg class="feather feather-mail me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg><span class="text-800">something@gmail.com</span>
              </p>
            </div>
          </div>
          <div class="border-bottom border-3"></div>
          <div class="row flex-center my-3">
            <div class="col-md-6 order-1 order-md-0">

            </div>
            <div class="col-md-6">
              <div class="text-center text-md-end"><a href="#!"><span class="me-4" data-feather="facebook"></span></a><a href="#!"> <span class="me-4" data-feather="instagram"></span></a><a href="#!"> <span class="me-4" data-feather="youtube"></span></a><a href="#!"> <span class="me-4" data-feather="twitter"></span></a></div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  </body>

</html>