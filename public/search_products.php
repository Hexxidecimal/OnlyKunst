<?php 

  session_start();

?>

<?php 
  $searchCount = (int)0;
  if(isset($_GET["verzenden"]) && isset($_GET["search"]) && $_GET["search"] != ""){
    $search = $_GET["search"];
    $mysql = new MySQLi ("localhost", "root", "", "onlykunst");
    if(mysqli_connect_errno()){trigger_error('Fout bij verbinding: '.$mysqli->error);}

    $sql = "SELECT *
            FROM tblartikel
            WHERE ArtikelNaam LIKE ?";
    
    if($stmt = $mysql->prepare($sql)){
        $stmt->bind_param("s", $zoek);
                // % is * van access in php
        $zoek = "%" . $search . "%";
        if(!$stmt->execute()){
            echo "Het uitvoeren van de query is mislukt: " . $stmt->error . " in query: " . $sql;
        }
        else{
            $stmt->bind_result($artikelId, $artikelNaam, $artikelFoto, $artikelPrijs, $artikelBeginprijs, $artikelSaves, $artikelLikes, $artikelBekeken, $aantalGeinteresseerden);

            while($stmt->fetch()){
                $artNaa[$artikelId] = $artikelNaam;
                $artFot[$artikelId] = $artikelFoto;
                $artPri[$artikelId] = round($artikelPrijs,2,2);
                $artBeg[$artikelId] = round($artikelBeginprijs,2,2);
                $artSav[$artikelId] = $artikelSaves;
                $artLik[$artikelId] = $artikelLikes;
                $artBek[$artikelId] = $artikelBekeken;
                $aanGei[$artikelId] = $aantalGeinteresseerden;
                $searchCount++;
            }
        }
        $stmt->close();
    }
    else{
        echo "Er zit een fout in de query: " . $mysqli->error;
    }
  }
    
 
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <script type="text/javascript">
      function scroll(){
        

          document.getElementById('results').scrollIntoView(true);

        
        
      }
    </script>
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
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/cons/logo.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <style>
      #navbarNavDarkDropdown{
    padding: 0% 0% 0% 0%;
    margin-right: 5%;
    margin-top: -1.5%;
}
    </style>
    
  </head>

<?php 
  if(isset($_GET["verzenden"]) && isset($_GET["search"]) && $_GET["search"] != ""){

    echo
      '<script type="text/javascript">',
      'scroll();',
      '</script>'
    
    ;

  }
?>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="index.php"><img class="d-inline-block" src="assets/img/logo.png" alt="logo.png" /><span class="text-1000 fs-0 fw-bold ms-2">OnlyKunst</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <form class="d-flex"><a class="text-1000" href="contact.php">
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

        <!--SEARCH BAR -->
      

        <form class="container" id="searchBar" method="GET" style="width: 60%" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          
          <div class="input-group mb-3">
            <input type="text" name="search" id="search" class="form-control" placeholder="Zoeken" value="<?php if(isset($_GET["search"]) && isset($search)){$frm_name=htmlspecialchars($search); $frm_name=stripslashes($search); echo "$_GET[search]";}  ?>" aria-label="Zoeken" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <input type="submit" class="btn btn-primary btn-lg" id="verzenden" name="verzenden" onclick="scroll()" value="Browse Artikelen">
            </div>
          </div>
          <?php if(isset($_GET["verzenden"]) && isset($_GET["search"]) && $_GET["search"] != ""){echo "<div class='mx-auto' style='width: 50%;'><h2 class='text-center' style='color: grey'>" . $searchCount . " ";?> <?php if($searchCount == 1){echo "resultaat";} else {echo "resultaten";}?> <?php echo " gevonden</h2></div>";} ?>
            
        </form>
        
        
        <!-- end of .container-->

      </section>
      



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 pb-8" id="results">

      <?php 
        if(isset($_GET["verzenden"]) && isset($_GET["search"]) && $_GET["search"] != ""){
          if($searchCount > 0){

            echo "<div class='container-fluid container-lg'>
                    <div class='row h-100 g-2 justify-content-center'>";

                      foreach($artNaa as $key => $pener){

                        echo "<div class='col-md-9 col-lg-4 mb-3 mb-md-0 h-100'>
                          <div class='card card-span text-white h-100'><img class='img-card h-100' src='";?><?php echo $artFot[$key] ?><?php echo"' alt='";?><?php echo $artNaa[$key]; ?><?php echo"' />
                            <div class='card-body px-xl-5 px-md-3 pt-0 pb-7'>
                              <div class='d-flex  bg-100 mt-n5 me-auto rounded shadow' id='dataStrip'>
                                <div class='d-flex flex-1 justify-content-around' id='dataStrip' style='height: 60px; padding-top: 17px'> <span class='text-900 text-center'><abbr title='Bekeken'><i data-feather='eye'> </i></abbr><span class='text-900 ms-2'>";?><?php echo $artBek[$key]; //add hovertext ?><?php echo "</span></span><span class='text-900 text-center'><abbr title='Liked'><i data-feather='heart'> </i></abbr><span class='text-900 ms-2'>";?><?php echo $artLik[$key]; ?><?php echo"</span></span><span class='text-900 text-center'><abbr title='Opgeslagen'><i data-feather='bookmark'> </i></abbr><span class='text-900 ms-2'>";?><?php echo $artSav[$key]; ?><?php echo"</span></span><span class='text-900 text-center'><abbr title='Geïnteresseerden'><i data-feather='dollar-sign'> </i></abbr><span class='text-900 ms-2'>";?><?php echo $aanGei[$key]; ?><?php echo"</span></span></div>
                                  </div>
                                  <h6 class='text-900 mt-3'>";?><?php echo "€" . $artPri[$key]; ?><?php echo"<span class='fw-normal' >";?><?php if($artPri[$key] > $artBeg[$key]){echo " €" . $artBeg[$key];} ?><?php echo"</span></h6>
                                  <h3 class='fw-bold text-1000 mt-5 text-truncate'>";?><?php echo $artNaa[$key]; ?><?php echo"</h3>
                                  <p class='text-900 mt-3'>";?><?php //description placeholder ?><?php echo"</p><a class='btn btn-lg text-900 fs-1 px-0 hvr-icon-forward' href='";?><?php /* voeg hier de link toe */ echo "#!";?><?php echo"' role='button'>Visit page
                                    <svg class='bi bi-arrow-right-short hover-icon' xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' viewBox='0 0 16 16'>
                                  <path fill-rule='evenodd' d='M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z'> </path>
                                </svg></a>
                            </div>
                          </div>
                        </div>";?><?php

                      }

            echo "  </div>
                  </div>";

          }

          

        }
      
        
      
      ?>
      
            
          
        

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 pt-7" id="results">

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
              <div class="text-center text-md-end"><a href="#!"><span class="me-4" data-feather="facebook"></span></a><a href="#!"> <span class="me-4" data-feather="instagram"></span></a><a href="#!"> <span class="me-4" data-feather="youtube"></span></a><a href="#!"> <span class="me-4" data-feather="twitter"></span></a></div>
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