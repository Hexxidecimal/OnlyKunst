<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<?php 

  session_start();


?>
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
    <!--    Mains Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="index.php"><img class="d-inline-block" src="assets/img/logo.png" alt="logo" /><span class="text-1000 fs-0 fw-bold ms-2">OnlyKunst</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="#maandelijks">Kunst van de maand</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#nieuwste">Nieuwste</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#collection">Collections</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#yorka">Over Yorka</a></li>
            </ul>
            
            <form class="d-flex">
            <div class="dropdown">
              <button class="btn btn-black dropdown-toggle" dropdown-padding-x="1rem" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Zoeken
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id="dropdownMenu1">
                <li><a class="dropdown-item" href="#">Artikelen</a></li>
                <li><a class="dropdown-item" href="#">Gebruikers</a></li>
                <li><a class="dropdown-item" href="#">Activiteiten</a></li>
              </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Zoeken
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Artikelen</a></li>
            <li><a class="dropdown-item" href="#">Gebruikers</a></li>
            <li><a class="dropdown-item" href="#">Activiteiten</a></li>
          </ul>
        </li>
      </ul>
    </div>
            <a class="text-1000" href="contact.php">
                <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg></a><a class="text-1000" href="product.php">
                <svg class="feather feather-shopping-cart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="9" cy="21" r="1"></circle>
                  <circle cx="20" cy="21" r="1"></circle>
                  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg></a><a class="text-1000" href="#!">
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
        <div class="bg-holder overlay overlay-light" style="background-image:url(assets/img/gallery/header-bg.png);background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-12 mb-10">
              <div class="d-flex align-items-center flex-column">
                <h1 class="fw-normal"> De beste kunstsite in België.</h1>
                <h1 class="fs-4 fs-lg-8 fs-md-6 fw-bold">Only for you.</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <section class="py-0" id="header" style="margin-top: -23rem !important;">

          <div class="container">
            <div class="row g-0">
              <div class="col-md-6">
                <div class="card card-span h-100 text-white"> <img class="img-fluid" src="assets/img/gallery/VirtualOutlet2.png" width="790" alt="..." />
                  <div class="card-img-overlay d-flex flex-center"> <a class="btn btn-lg btn-dark" href="#!" style="color: white;">Virtuele Outlet</a></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card card-span h-100 text-white"> <img class="img-fluid" src="assets/img/gallery/kalender6.png" width="790" alt="..." />
                  <div class="card-img-overlay d-flex flex-center"> <a class="btn btn-lg btn-dark" href="#!" style="color: white;">Kalender </a></div>
                </div>
              </div>
            </div>
          </div>

      <section id="maandelijks">

        <div class="container">
          <div class="row h-100 g-0">
            <div class="col-md-6">
              <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
                <h4 class="text-800">Beste kunst van December</h4>
                <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Maandelijkse kunst</h1>
                <p class="mb-5 fs-1">Dit is een collectie van de meest populaire kunst van deze maand. Gebaseerd op de hoeveelheid likes.</p>
                <div class="d-grid gap-2 d-md-block"><a class="btn btn-lg btn-dark" href="#" role="button">Bekijk</a></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/geenFoto.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Not yet
                      <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                      </svg></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row h-100 g-2 py-1">
            <div class="col-md-4">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/geenFoto.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Not yet
                      <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/geenFoto.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Not yet
                      <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/viegor.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Not yet
                      <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                      </svg></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-0" id="nieuwste">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fs-3 fs-lg-5 lh-sm mb-3">Nieuwste artikelen</h5>
            </div>
            <div class="col-12">
              <div class="carousel slide" id="carouselNewArrivals" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/NoFotoNew.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$</h6>
                            <p class="text-400 fs-1">category</p>
                            <h4 class="text-light">naam</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselNewArrivals" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselNewArrivals" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="collection">

        <div class="container">
          <div class="row h-100 gx-2">
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/YorkaCollectie2.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="p-5 p-md-2 p-xl-5">
                    <h1 class="fs-md-4 fs-lg-7 text-light">Yorka</h1>
                    <h5 class="fs-2 text-light">collection</h5>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/RomanCollectie.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="p-5 p-md-2 p-xl-5 d-flex flex-column flex-end-center align-items-baseline h-100">
                    <h1 class="fs-md-4 fs-lg-7 text-light">Roman</h1>
                    <h5 class="fs-2 text-light">collection</h5>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section>
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Most popular accounts</h5>
            </div>
            <div class="col-12">
              <div class="carousel slide" id="carouselBestSellers" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">xxx_sniperwolf</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tenmopfp.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">vulling</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"></span><span class="text-danger"></span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBestSellers" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselBestSellers" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="yorka">
        <div class="container">
          <div class="row h-100 g-0">
            <div class="col-md-6">
              <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
                <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Yorka </h1>
                <p class="mb-5 fs-1">Yorka is de sponsor van deze website. Ze is een kunstenares die medekunstenaars een plek wou geven om gemakkelijk kunst te verkopen.</p>
                <div class="d-grid gap-2 d-md-block"><a class="btn btn-lg btn-dark" href="#!" role="button">Explore</a></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/yorka.png" alt="..." /><a class="stretched-link" href="#!"></a></div>
            </div>
          </div>
        </div>
        <!-- end of .container-->
        <br/>
      <!-- ============================================-->
      <!-- <section> begin ============================-->
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
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="contact.php">Contact Us</a></li>
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
              <div class="text-center text-md-end"><a href="#!"><span class="me-4" data-feather="facebook"></span></a><a href="#!"> <span class="me-4" data-feather="instagram"></span></a><a href="https://www.youtube.com/watch?v=mxzeInNdE9U"> <span class="me-4" data-feather="youtube"></span></a><a href="#!"> <span class="me-4" data-feather="twitter"></span></a></div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
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