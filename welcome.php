<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: minsida.php");
}

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!--css-->
   <link href="css/style.css" rel="stylesheet">
<!--Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
<style>

.profil{
  margin-top: 150px;
  padding-left: 20px;
  padding-right: 20px;
  background-color: #F8F9F9;
}
.welcome{
	border-top:3px solid #343a40;
    max-width: 750px;
}
.col-sm-6{
	margin: auto;
}
.form-group1{
	
	width: 100px;
    min-height: 100px;
    text-align: center;
    padding: 40px 30px;
	width: 100%;
    height: 50px;
    margin-bottom: 25px;
}
.form-group{
	text-align: center;
}

.container .login-email .input-group .btn {
    display: block;
    width: 100%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #a29bfe;
    outline: none;
    
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
}
.container .login-email .input-group input {
    
    border: 2px solid #e7e7e7;
    padding: 15px 20px;
    
    
}
</style>
	<title>Welcome</title>
</head>
<body>


<header class="  navbar navbar-expand-lg navbar-light bg-info fixed-top"style="border-radius: 50px;">
<!--<div class="col-12 bg-dark" style="border-radius: 50px;">  </div> -->
    <div class="container-fluid" style="border-radius: 50px;">
	
  <a class="navbar-brand pad0" href="#"><img src="img/logoorgınal.jfif" alt="logo" title="logo" width="80px" height="80px" class="img-round">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <span class="logoyaniyazisi text-dark hidden-xs font-weight-bold">
    <?php echo "<h1>välkommen " . $_SESSION['username'] . "</h1>"; ?>
  </span>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
  
	  <li class="nav-item">
        <a class="nav-link text-light font-weight-bold text-center" style="margin-left:10px" href="#kontakta"> Vill delta i en projektgrupp </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-light font-weight-bold text-center"  href="#kontakta">Vill delta i en aktiv roll om</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-light font-weight-bold text-center"  href="#kontakta">Gruppens deltagare och deras roller</a>
      </li>
    </ul>

      </div>
 <div class="conteiner">
    
      <?php 
      echo '<a href="logout.php" class="btn btn-info btn-sm" id="btn" >Logga Ut</a>'; 
    ?>
   
  
    </div> 
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle " style="margin-right:10px" type="button" id="drop_yazı" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Svenska
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   
    <a class="dropdown-item" id="sv" href="#">Svenska</a>
    <a class="dropdown-item"  id="en" href="#">English</a>
   
  </div>

  
    
 
  </div>
</div>
  
    </div><!--container-fluid-->
</header>


</div>
    <!--Header-->
    <section class="profil"  >

	<div class="col-sm-6  ">
    
	<h5 class="card-title font-weight-bold text-center">Vill delta i en projektgrupp
</h5>
	<hr class="ayrac"> 
	<ol>
  <li>skriva ett projekt</li>
  <li>finansiell planering</li>
  <li>statistik och dataforskning</li>
  <li>Çayinspektion-observation</li>
</ol>
 
</div>

     
	 <div class="col-sm-6  ">
    
        <h5 class="card-title font-weight-bold text-center">Vill delta i en aktiv roll om</h5>
		<hr class="ayrac"> 
		<ul>
      <li>skriva ett projekt</li>
      <li>finansiell planering</li>
      <li>statistik och dataforskning</li>
	  <li>Çayinspektion-observation</li>
   </ul>
     
  </div>
  <br><hr class="welcome"> 
  <div class="col-sm-6">
    
        <h5 class="card-title font-weight-bold text-center">Special title treatment</h5>
		<hr class="ayrac"> 
		<ul>
      
      <li></li>
      <li></li>
   </ul>
    
      
  </div>

 

  </div>
  <div class="container">
		<form action="" method="POST" class="login-email">
  <div class="form-group">
			<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
			<label class="form-check-label" for="invalidCheck">
			Härmed accepterar jag att ovanstående uppgifter läggs i föreningens medlemsregister och att jag därmed blir medlem.
			</label>
			</div>
			</div>
			<div class="input-group" >
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-envelope text-success"></i>
                                        </div>
                                    </div>
                                    <input type="email" class="form-control" name="mail" placeholder="E-Posta" required>
                                </div>
                            </div>
		
			<div class="input-group">
				<button name="submit" class="btn">Skicka</button>
			</div>
		</form>
		</div>
    </section>
<br><br>

	<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 bg-info">

<!-- Footer Links -->
<div class="container text-center text-md-left ">

  <!-- Grid row -->
  <div class="row">

	<!-- Grid column -->
	<div class="col-md-2 mx-auto">

	  <!-- Links -->
	 <h6 class="text-uppercase font-weight-bold">Relaterade länkar</h6>
	  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto bg-info" >
	  <ul class="text-dark">
		<li>
		  <a href="#!"  class="text-dark">Länk-1: https://eufonder.se/eu-fonder.html
</a>
		</li>
		<li>
		  <a href="#!"  class="text-dark">Länk-2: https://www.esf.se/vara-fonder/socialfonden/
</a>
		</li>
		<li>
		  <a href="#!"  class="text-dark">Länk-3: https://jordbruksverket.se/stod/programmen-som-finansierar-stoden/eu-fonderna</a>
		</li>
		
	  </ul>

	</div>
	<!-- Grid column -->

	<hr class="clearfix w-100 d-md-none">

	<!-- Grid column -->
	<div class="col-md-2 mx-auto">

	  <!-- Links -->
	  <h6 class="text-uppercase font-weight-bold">Relaterade länkar</h6>
	  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	  <ul class="text-dark">
	  
		<li>
		  <a href="#!"  class="text-dark">Länk-4: https://www.amf.se/vara-fonder/spara-i-amfs-fonder
</a>
		</li>
		<li>
		  <a href="#!"  class="text-dark">Länk-5: https://www.migrationsverket.se/Andra-aktorer/EU-fonder.html

</a>
		</li>
		<li>
		  <a href="#!"  class="text-dark">Länk-6: https://www.mucf.se

</a>
		</li>
		<li>
		  <a href="#!"  class="text-dark">Länk-7: https://cfcu.gov.tr

</a>
		</li>
	  </ul>

	</div>
	<!-- Grid column -->

	<hr class="clearfix w-100 d-md-none">

	<!-- Grid column -->
   <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" id="kontakta">

	  <!-- Links -->
	  <h6 class="text-uppercase font-weight-bold" id="kontakta">Kontakta Oss</h6>
	  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	  <p>
		<i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
	  <p>
		<i class="fas fa-envelope mr-3"></i> info@example.com</p>
	  <p>
		<i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
	  <p>
		<i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

	</div>
	<!-- Grid column -->

   

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->



<!-- Social buttons -->

<!-- Grid container -->
<div class="container p-4 pb-0 text-center ">
  <!-- Section: Social media -->
  <section class="mb-4">
	<!-- Facebook -->
	<a
	  class="btn btn-primary btn-floating m-1"
	  style="background-color: #3b5998;"
	  href="#!"
	  role="button"
	  ><i class="fab fa-facebook-f"></i
	></a>

	<!-- Twitter -->
	<a
	  class="btn btn-primary btn-floating m-1"
	  style="background-color: #55acee;"
	  href="#!"
	  role="button"
	  ><i class="fab fa-twitter"></i
	></a>

	<!-- Google -->
	<a
	  class="btn btn-primary btn-floating m-1"
	  style="background-color: #dd4b39;"
	  href="#!"
	  role="button"
	  ><i class="fab fa-google"></i
	></a>

	<!-- Instagram -->
	<a
	  class="btn btn-primary btn-floating m-1"
	  style="background-color: #ac2bac;"
	  href="#!"
	  role="button"
	  ><i class="fab fa-instagram"></i
	></a>

	<!-- Linkedin -->
	<a
	  class="btn btn-primary btn-floating m-1"
	  style="background-color: #0082ca;"
	  href="#!"
	  role="button"
	  ><i class="fab fa-linkedin-in"></i
	></a>
	
  </section>
  <!-- Section: Social media -->
</div>
<!-- Grid container -->

<!-- Copyright -->
<div class="text-center p-3 bg-info" >
  © 2022 Copyright: 
  <a class="text-white" href="https://www.ghpf.se/">www.ghpf.se             &&        www.globalharmonyprojects.org</a>
</div>
<!-- Copyright -->

<!-- Social buttons -->

<!-- Copyright -->
<!--       <div class="footer-copyright text-center py-3">© 2020 Copyright:
		   <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
</div>        -->
<!-- Copyright -->

</footer>
<!-- Footer -->


</body>
</html>

