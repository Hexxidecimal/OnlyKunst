<?php
  $oke = false;
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

    </head>
    <body>
        <main class="main" id="top">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
              <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="d-inline-block" src="assets/img/logo.png" alt="logo" /><span class="text-1000 fs-0 fw-bold ms-2">OnlyKunst</span></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="#maandelijks">Kunst van de maand</a></li>
                    <li class="nav-item px-2"><a class="nav-link fw-medium" href="#nieuwste">Nieuwste</a></li>
                    <li class="nav-item px-2"><a class="nav-link fw-medium" href="#collection">Collections</a></li>
                    <li class="nav-item px-2"><a class="nav-link fw-medium" href="#yorka">Over Yorka</a></li>
                  </ul>
                  <form class="d-flex"><a class="text-1000" href="contact.html">
                      <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                      </svg></a><a class="text-1000" href="product.html">
                      <svg class="feather feather-shopping-cart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                      </svg></a><a class="text-1000" href="#!">
                      <svg class="feather feather-search me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
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
                
                <div class="container">
                    <div class="row flex-center">
                      <div class="col-6 mb-10" style="background-color:#212121;">
                        <div class="d-flex align-items-center flex-column">
                                <br>
                                <br>
                                <form action="" method="post" enctype="multipart/form-data">
                                <p style="color:#ffffff; font-size: 200%;">
                                Gebruikersnaam:
                                <label>
                                    <input  class="input-box" type="text" name="gebruikersnaam"
                                    value="<?php if(isset($_POST["gebruikersnaam"])){$_POST["gebruikersnaam"] = htmlspecialchars($_POST["gebruikersnaam"]);
                                    $_POST["gebruikersnaam"] = stripcslashes($_POST["gebruikersnaam"]);}?>"/>
                                    <?php 
                                    if(isset($_POST["submit"])){
                                      if($_POST["gebruikersnaam"] ==""){
                                        echo "gelieve een gebruikersnaam in te vullen";
                                        $oke = false;
                                    }
                                    else{
                                      $oke = true;
                                    }
                                    $select = mysqli_query($con, "SELECT * FROM tblgebruikers WHERE gebruikersnaam = '".$_POST['gebruikersnaam']."'");
                                    if(mysqli_num_rows($select)) {
                                        echo('deze gebruikersnaam bestaat al kiez een andere');
                                        $oke = false;
                                    }
                                    else{
                                      $oke = true;
                                    }
                                  }
                                    ?>
                                </label>
                                </p >
                                <p style="color:#ffffff; font-size: 200%;">
                                Naam:
                                <label>
                                    <input  class="input-box" type="text" name="naam" value="<?php if(isset($_POST["naam"])){$_POST["naam"] = htmlspecialchars($_POST["naam"]);
                                    $_POST["naam"] = stripcslashes($_POST["naam"]);}?>"/>
                                    <?php 
                                    if(isset($_POST["submit"])){
                                      if($_POST["naam"] ==""){
                                        echo "gelieve een gebruikersnaam in te vullen";
                                        $oke = false;
                                    }
                                    else{
                                      $oke = true;
                                    }
                                  }
                                    ?>
                                </label>
                                <p style="color:#ffffff; font-size: 200%;">
                                Voornaam:
                                <label>
                                    <input  class="input-box" type="text" name="Voornaam" value="<?php if(isset($_POST["Voornaam"])){$_POST["Voornaam"] = htmlspecialchars($_POST["Voornaam"]);
                                    $_POST["Voornaam"] = stripcslashes($_POST["Voornaam"]);}?>"/>
                                    <?php 
                                    if(isset($_POST["submit"])){
                                      if($_POST["Voornaam"] ==""){
                                        echo "gelieve een gebruikersnaam in te vullen";
                                        $oke = false;
                                    }
                                    else{
                                      $oke = true;
                                    }
                                    }
                                  
                                    ?>
                                </label>
                                </p >
                                <p style="color:#ffffff; font-size: 200%;">
                                wachtwoord:
                                <label>
                                    <input  class="input-box" type="password" name="wachtwoord"  value="<?php if(isset($_POST["wachtwoord"])){$_POST["wachtwoord"] = htmlspecialchars($_POST["wachtwoord"]);
                                    $_POST["wachtwoord"] = stripcslashes($_POST["wachtwoord"]);}?>"/>
                                    <?php 
                                    if(isset($_POST["submit"])){
                                      if($_POST["wachtwoord"] ==""){
                                        echo "gelieve een gebruikersnaam in te vullen";
                                        $oke = false;
                                    }
                                    else{
                                      $oke = true;
                                    }
                                    }
                                  
                                    ?>
                                </label>
                                </p >
                                <p style="color:#ffffff; font-size: 200%;">
                                e-mail:
                                <label>
                                    <input  class="input-box" type="email" name="email"/>
                                    <?php 
                                    if(isset($_POST["submit"])){
                                      if($_POST["email"] ==""){
                                        echo "gelieve een gebruikersnaam in te vullen";
                                        $oke = false;
                                    }
                                    else{
                                      $oke = true;
                                    }
                                    }
                                  
                                    ?>
                                </label>
                                </p >
                                <p style="color:#ffffff; font-size: 200%;">
                                Adres:
                                <label>
                                    <input  class="input-box" type="text" name="Adres"/>
                                    <?php 
                                    if(isset($_POST["submit"])){
                                      if($_POST["Adres"] ==""){
                                        echo "gelieve een gebruikersnaam in te vullen";
                                        $oke = false;
                                    }
                                    else{
                                      $oke = true;
                                    }
                                    }
                                    ?>
                                </label>
                                </p >
                                <p style="color:#ffffff; font-size: 200%;">
                                Profielfoto:
                                <label>
                                    <div style="color:#ffffff; font-size: 150%;">
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <input type="button" value="Upload Image" name="submit">
                                    </div>
                                </label>
                                </p >
                                
                                <p style="color:#ffffff; font-size: 200%;">
                                Account Discriptie:
                                <label>
                                    <input  class="input-box" type="text" name="AD" value="<?php if(isset($_POST["AD"])){$_POST["AD"] = htmlspecialchars($_POST["AD"]);
                                    $_POST["AD"] = stripcslashes($_POST["AD"]);}?>"/>
                                </label>
                                </p >
                                <p>
                                <label>
                                <?php
                                  if($oke = false){
                                    echo "gelieve alles juist intevullen";
                                  }
                                  else{
                                    "<div class='d-grid gap-2 d-md-block'><a class='btn btn-lg btn-dark' href='login.php' ib='submit' name='submit' role='submit'>registreer</a></div>";
                                  }
                                ?>
                                    
                                </label>
                                </p>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </section>
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
<?php
       $Voornaam = $_POST['Voornaam'];
       $naam = $_POST['naam'];
       $Gebruikersnaam = $_POST['gebruikersnaam'];
       $email = $_POST['email'];
       $wachtwoord = $_POST['wachtwoord'];
       $Adres = $_POST['Adres'];
       $AD = $_POST['AD'];
       $filename = $_POST['filename'];

	// Database connection
  $ok = false;
	$conn = new mysqli('localhost','root','','gip');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    $ok = false;
	} else {
    $ok = false;
		$stmt = $conn->prepare("insert into tblGebruikers(naam, Voornaam, gebruikersnaam, email, gebruikerswachtwoord, Adres, AcountDescriptie, gebruikersfoto) values(?, ?, ?, ?, ?, ?, ?, ?) ");
		$stmt->bind_param("ssssssss", $naam, $Voornaam, $Gebruikersnaam, $email, $wachtwoord, $Adres, $AD, $filename);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}
  if ($ok == true){
    "<a href='login.php'>";
  }
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
    } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>