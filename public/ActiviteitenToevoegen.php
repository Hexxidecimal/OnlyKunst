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


    <style>
      .white {color: white;}
      .errors {color: red;}
      .title {color: white;
                font-size: 1.5em;}
    </style>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <form action="ActiviteitenToevoegen.php" method="post" enctype="multipart/form-data">
      <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="index.php"><img class="d-inline-block" src="assets/img/logo.png" alt="logo" /><span class="text-1000 fs-0 fw-bold ms-2">OnlyKunst</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="activiteit.php"><i data-feather="corner-up-left" class="me-3" style="size: 16px;"></i>Terug</a></li>
            </ul>
            <form class="d-flex"><a class="text-1000" href="contact.html">
                <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg></a><a class="text-1000" href="#">
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
          <div class="container" style="background-color: black;">
            <br />
            <div class="row">
              <p class="title">Activiteit toevoegen</p>
            </div>
            <div class="row">
            <div class="col-md-1 col-sm-12">

            </div>
            <div class="col-md-4 col-sm-12" >
            <?php
                if(isset($_POST["submitfoto"])) 
                { 
                  $target_dir = "uploads_activiteit/"; 
                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                  $uploadOk = 1; 
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                  if($check !== false)
                  {
                    echo "<p>File is an image - " . $check["mime"] . "."; $uploadOk = 1 ."</p>";
                  } 
                  else 
                  {
                    echo "<p class=\"errors\">File is not an image.</p>"; $uploadOk = 0; 
                  }      
                  if (file_exists($target_file)) 
                  { 
                    echo "<p class=\"errors\">Sorry, file already exists.</p>"; $uploadOk = 0; 
                  } 
                  if ($_FILES["fileToUpload"]["size"] > 500000) 
                  { 
                    echo "<p class=\"errors\">Sorry, your file is too large.</>"; $uploadOk = 0; 
                  } 
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
                  {
                    echo "<p class=\"errors\">Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>"; $uploadOk = 0; 
                  }
                  if ($uploadOk == 0) 
                  {
                    echo "<p class=\"errors\">Sorry, your file was not uploaded. </p>"; 
                  } 
                  else 
                  { 
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
                    { 
                      $url = "uploads_activiteit/".htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
                      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded."; 
                      
                    } 
                    else
                    {  
                      echo "<p class=\"errors\">Sorry, there was an error uploading your file.</p>"; 
                    }
                  } 
                }
              ?>
            

            </div>
            <div class="row">
              <div class="col-md-1 col-sm-12">

              </div>
              <div class="col-md-4 col-sm-12" >
                <p style="height: 400px; width: 400px; border: 1px solid white;"><input type="text" style="color: black;" name="url" id="url" value="<?php if(isset($_POST["submitfoto"])){echo $target_file;}else{ echo "";}?>" hidden></input><img name="Foto" id="Foto" src="<?php if(isset($_POST["submitfoto"])){echo $target_file;}else{echo "#";}?>" style="height: 400px; width: 400px; border: 1px solid white;" alt="Nog geen foto"></p>
              </span>
              </div>
              <div class="col-md-1 col-sm-12">

              </div>
              <div class="col-md-2 col-sm-6">
                <label class="white" style="<?php if(isset($_POST["submit"])){if($_POST["naamActiviteit"] == ""){echo "color: red;";}else {}} ?>">Naam van de activiteit:</label> <br/>
                <label class="white" style="<?php if(isset($_POST["submit"])){if($_POST["descActiviteit"] == ""){echo "color: red;";}else {}} ?>">description:</label>
                <br /><br />
                <label class="white" style="<?php if(isset($_POST["submit"])){if($_POST["soortActiviteit"] == ""){echo "color: red;";}else {}} ?>">soort:</label> <br/>
                <label class="white" style="<?php if(isset($_POST["submit"])){if($_POST["locatieActiviteit"] == ""){echo "color: red;";}else {}} ?>">locatie:</label> <br/>
                <label class="white" style="<?php if(isset($_POST["submit"])){if($_POST["datumActiviteiten"] == ""){echo "color: red;";}else {}} ?>">datum:</label> <br/>
                <label class="white" style="<?php if(isset($_POST["submit"])){if($_POST["duurActiviteit"] == ""){echo "color: red;";}else {}} ?>">duur:</label> <br/>
              </div>
              <div class="col-md-auto col-sm-6">
                <input type="text" name="naamActiviteit" id="naamActiviteit"  value="<?php if(isset($_POST["naamActiviteit"])) {$_POST["naamActiviteit"]=htmlspecialchars($_POST["naamActiviteit"]); $_POST["naamActiviteit"]=stripslashes($_POST["naamActiviteit"]);echo $_POST["naamActiviteit"];} ?>"></input> <br/>
                <textarea name="descActiviteit" id="descActiviteit" rows="2" cols="50"><?php if(isset($_POST["descActiviteit"])) {$_POST["descActiviteit"]=htmlspecialchars($_POST["descActiviteit"]); $_POST["descActiviteit"]=stripslashes($_POST["descActiviteit"]);echo $_POST["descActiviteit"];}?></textarea> <br/>
                <select name="soortActiviteit">
                        <option value="1" <?php if (isset($_POST["soortActiviteit"]) && $_POST["soortActiviteit"] == "1"){echo "selected";} ?>>Markt</option>
                        <option value="2" <?php if (isset($_POST["soortActiviteit"]) && $_POST["soortActiviteit"] == "2"){echo "selected";} ?>>Tentoonstelling</option>
                        <option value="3" <?php if (isset($_POST["soortActiviteit"]) && $_POST["soortActiviteit"] == "3"){echo "selected";} ?>>Workshop</option>
                    </select> <br/>
                <input type="text" name="locatieActiviteit" id="locatieActiviteit" value="<?php if(isset($_POST["locatieActiviteit"])) {$_POST["locatieActiviteit"]=htmlspecialchars($_POST["locatieActiviteit"]); $_POST["locatieActiviteit"]=stripslashes($_POST["locatieActiviteit"]);echo $_POST["locatieActiviteit"];} ?>"></input> <br/>
                <input type="date" name="datumActiviteiten" id="datumActiviteiten" value="<?php if(isset($_POST["datumActiviteiten"])) {$_POST["datumActiviteiten"]=htmlspecialchars($_POST["datumActiviteiten"]); $_POST["datumActiviteiten"]=stripslashes($_POST["datumActiviteiten"]);echo $_POST["datumActiviteiten"];} ?>"></input> <br/>
                <input type="text" name="duurActiviteit" id="duurActiviteit" value="<?php if(isset($_POST["duurActiviteit"])) {$_POST["duurActiviteit"]=htmlspecialchars($_POST["duurActiviteit"]); $_POST["duurActiviteit"]=stripslashes($_POST["duurActiviteit"]);echo $_POST["duurActiviteit"];} ?>"></input> <br/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1 col-sm-12">

              </div>
                <div class="col-md-4 col-sm-12" >
                  <input type="file" name="fileToUpload" id="fileToUpload" style="<?php if(isset($_POST["submit"])){if($_POST["url"] == ""){echo "color: red;";}else {}} ?>"> <input type="submit" value="Upload Image" name="submitfoto" style="<?php if(isset($_POST["submit"])){if($_POST["url"] == ""){echo "color: red;";}else {}} ?>">
                </div>
                <div class="col-md-4 col-sm-12">
                 
                </div>
                <div class="col-md-3 col-sm-12">
                  <p class="errors" <?php  
                  if (isset($_POST["submit"])){if ($_POST["datumActiviteiten"] != "" && $_POST["naamActiviteit"] != "" && $_POST["descActiviteit"] != "" && $_POST["duurActiviteit"] != "" && $_POST["locatieActiviteit"] != "" && $_POST["soortActiviteit"] != "" && $_POST["url"] != "")
                  { echo "hidden";} else  {}}else {echo "hidden";}
                ?>>de rode vakjes zijn niet ingevuld.</p>
                   <input type="submit" value="Upload activiteit" name="submit"> <br/> <br/>
                </div>
            </div>
            <br/>
          </div>
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <?php 
          if(isset($_POST["submit"]))
          {
              if ($_POST["datumActiviteiten"] != "" && $_POST["naamActiviteit"] != "" && $_POST["descActiviteit"] != "" && $_POST["duurActiviteit"] != "" && $_POST["locatieActiviteit"] != "" && $_POST["soortActiviteit"] != "" && $_POST["url"] != "")
              {
                $mysqli = new MySQLi("localhost","root","","gip");
                if(mysqli_connect_errno())
                {
                  trigger_error('Fout bij verbinding: '.$mysqli->error);
                }
                else
                {
                  $sql="INSERT INTO tblactiviteiten(ActiviteitDatum,ActiviteitNaam, ActiviteitDescriptie,ActiviteitDuur,ActiviteitPlaats,ActiviteitSoortID,activiteitToegevoegd,activiteitToegevoeddoor,activiteitFotoURL) VALUES(?,?,?,?,?,?,?,?,?)";
                    if($stmt = $mysqli->prepare($sql))
                    {
                      $stmt->bind_param('sssssisss',$ActiviteitDatum,$ActiviteitNaam,$ActiviteitDescriptie,$ActiviteitDuur,$ActiviteitPlaats,$ActiviteitSoortID,$activiteitToegevoegd,$activiteitToegevoeddoor,$activiteitFotoURL);
                      $ActiviteitDatum = $_POST["datumActiviteiten"];
                      $ActiviteitNaam = $_POST["naamActiviteit"];
                      $ActiviteitDescriptie = $_POST["descActiviteit"];
                      $ActiviteitDuur = $_POST["duurActiviteit"];
                      $ActiviteitPlaats = $_POST["locatieActiviteit"];
                      $ActiviteitSoortID = $_POST["soortActiviteit"];
                      $activiteitToegevoegd = "";
                      $activiteitToegevoeddoor = ""; //wacht op het acc ding
                      $activiteitFotoURL = $_POST["url"];
                      if(!$stmt->execute())
                      {
                        echo'het uitvoeren van de query is mislukt: ';
                      }
                      else
                      {
                      }
                      $stmt->close();
                    }
                    else
                    {
                      echo'er zit een fout in u query'.$mysqli->error;
                    }
                }
              }
            }
        ?>
      


          <!--/.bg-holder-->

      

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
                <li class="lh-lg"><a class="text-800 text-decoration-none" href="contact.html">Contact Us</a></li>
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
    </form>
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