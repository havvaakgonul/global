<?php 
require_once 'config.php';
?>




<!doctype html>
<html lang="sv">
  <head>
    <!-- Required meta tags -->
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

    <title>Huvudsida</title>
  </head>
  <body>
    
    <!--Menu-->
   
   <header class="header navbar navbar-expand-lg navbar-light bg-info fixed-top">
    <div class="container-fluid">
      
  <a class="navbar-brand pad0" href="#"><img src="img/logoorg??nal.jfif" alt="logo" title="logo" width="80px" height="80px" class="img-round">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <span class="logoyaniyazisi text-white hidden-xs font-weight-bold">Global Harmoni Projekt
  </span>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
    <!--  <li class="nav-item active">
        <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
      </li>  -->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" style="margin-left:15px"href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Om GHPF
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#Syfte">M??l&Strategi/Syfte&Vision</a>
          <a class="dropdown-item" href="stadgar.php">Stadgar</a>
          <a class="dropdown-item" href="#">Stryelse</a>
          
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Projekt
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Tillv??gag??ngss??tt</a>
          <a class="dropdown-item" href="#">Projektbeskrivning</a>
          <a class="dropdown-item" href="#">S??ka projektmedel</a>
           <a class="dropdown-item" href="#">Utv??rdering och rapportering</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Aktiviteter
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">??rlig Kalender</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link ">partnerorganisationer</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link " style="margin-right:10px" href="kontakt.php">Kontakta Oss</a>
      </li>
    </ul>
   
 <div class="conteiner">
    
      <?php 
      echo '<a href="register.php" class="btn btn-info btn-sm" id="btn" >Bli Medlem</a>';
    

      echo '<a href="minsida.php" class="btn btn-info btn-sm" style="" >Min Sida</a>';
  
    ?>
   
   <!--<li>
    <button style="margin-right:10px" type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-user"></span>Bli Medlem</button></li>
   
 <li><button type="button" class="btn btn-info btn-sm" ><span class="glyphicon glyphicon-log-in"  ></span>Min Sida</button></li>
   -->
    </div> 
    <div class="dropdown">
  
        <!-- Translation Code here -->
         <!--
   <span>
					    <div class="translate" id="google_translate_element"></div>

                            <script type="text/javascript">
                                function googleTranslateElementInit() {  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');}
                            </script>
                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					</span>  
        --> 
					<!-- Translation Code End here --> 
    
  <button class="btn btn-secondary dropdown-toggle " style="margin-right:10px" type="button" id="drop_yaz??" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Svenska
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" onchange="set_language()" name="language" id="language">
  
    <a class="dropdown-item" id="sv" value="sv" <?php echo $sv_select ?> href="#">Svenska</a>
    <a class="dropdown-item"  id="en" value="en" <?php echo $en_select ?>  href="#">English</a>
    
   
  </div>
  </div>


  <!-- language script eklent??s??
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script>
    function set_language(){
      var language=jQery('#language').val();
      window.location.href='http://127.0.1/php/multi_language/?language='+language;
    }
  </script>-->




   <!-- d??l bolmes??
     <ul class="nav navbar-nav navbar-right pad5 text-white">
     <li><a href="#">
      <img style="margin-right:10px" width="30px" height="30px" src="img/sv.png" title="Svenska">
     </a></li> 
    
     <li><a href="#">
      <img  style="margin-right:20px" src="img/en.jfif" width="30px" height="30px" title="Engelska">
     </a></li>
    </ul >
    --> 
    
 
   
  </div><!--Navbar-collapse-->
    </div><!--container-fluid-->
</header>


 <!--Slider baslang??c-->
   <div class="row mt-10">
  <div class="container-fluid my-2 " id="slider">
 
<div id="carouselExampleCaptions" class="carousel slide my-2" data intecal="2000" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner1.jpg" class="d-block w-100 slider my-2" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Global Harmoni Projekt</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner2.jpg" class="d-block w-100 slider my-2" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>GHM</h5>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus itaque cupiditate fugiat excepturi quis odit rem facere, eius, exercitationem earum quisquam, iste consectetur modi magnam. Aperiam tenetur praesentium voluptatum dolorum.</p>
      </div>
    </div>
    
       
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
    <!--Header-->
    <section class="om" id="Syfte" >
     <h4 class="mb-3 font-weight-bold text-center">Syfte & Vision</h4>
      <hr class="ayrac"> 
     <div id="container-fluid">
      <div class="col md-2">

    
      <h5 class="mb-3 font-weight-bold text-center">Syfte</h5>
      <p class=" text-justify  font-weight-normal ">
V??r uppgift ??r att f??rbereda och genomf??ra projekt i syfte att bidra till utvecklingen av hela samh??llet, s??rskilt de utsatta grupperna i samh??llet p?? nationell och internationell niv??. Vi skulle vilja f??rbereda och genomf??ra projekt med st??d fr??n lokala och internationella institutioner och organisationer f??r att n?? v??ra m??l.
      </p>
      </div>

       <div class="col md-2">
        <h5 class="mb-3 font-weight-bold text-center">Vision</h5>
      <p class=" text-justify  font-weight-normal">
V??r vision ??r att bli en av de b??sta organisationerna i Europa p?? att bidra till utvecklingen av hela samh??llet genom att f??rbereda och genomf??ra projekt.
      </p>
     </div>


       <div class="col md-2">
      <h4 class="mb-3 font-weight-bold text-center">M??l & Strategi</h4>
      <hr class="ayrac"> 
      <p class=" text-justify  font-weight-bold">P?? kort sikt:</p>
      <p class=" text-justify  font-weight-normal">
<ul type="disc">
                <li>Att skriva, leda och genomf??ra projekt p?? nationell och internationell niv??.</li>
                <li>Att vara ett starkare f??rbund genom v??rt samarbete med lokala f??reningar, institutioner och v??ra medlemmar.</li>
                <li>Successivt ??ka antalet medlemmar, s??rskilt ungdomar.</li>
                <li>Skapa aktiva och produktiva projektgrupper.</li>
                <li>Att uppmuntra m??nniskor som vill ta med nya id??er och projekt att bidra till samh??llet.</li>
                <li>St??dja nationella och internationella partners vid ledning och genomf??rande av projekt.</li>
                <li>Att uppmuntra unga m??nniskor att delta i och g??ra och genomf??ra projekt.</li>
                
            </ul></p>
             <p class=" text-justify  font-weight-bold">L??ngsiktigt:</p>
      <p class=" text-justify  font-weight-normal">
<ul type="disc">
                <li>Att utveckla l??sningsalternativ till sociala problem och bidra till l??sningen genom nationella och internationella projekt.</li>
                <li>Att F??RBEREDA och genomf??r projekt i syfte att bidra till utvecklingen av hela samh??llet, s??rskilt de utsatta grupperna i samh??llet p?? nationell och internationell niv??.  </li>
                <li>F??r att f??rebygga av radikalisering, diskriminering, kriminalisering av unga, marginalisering, segregation och uppdelning av samh??llet med falska nyheter.</li>
                <li>Att fr??mja integrationen av flyktingar.</li>
                <li>Att skapa ett starkare projektn??tverk genom att ut??ka v??rt n??tverk p?? den globala arenan.</li>
                
                
            </ul></p>


</div>


</div>
    </section>
<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 bg-info">

  <!-- Footer Links -->
  <div class="container text-center text-md-left ">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
       <h6 class="text-uppercase font-weight-bold">Relaterade l??nkar</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <ul class="text-dark">
          <li>
            <a href="#!"  class="text-dark">L??nk-1: https://eufonder.se/eu-fonder.html
</a>
          </li>
          <li>
            <a href="#!"  class="text-dark">L??nk-2: https://www.esf.se/vara-fonder/socialfonden/
</a>
          </li>
          <li>
            <a href="#!"  class="text-dark">L??nk-3: https://jordbruksverket.se/stod/programmen-som-finansierar-stoden/eu-fonderna</a>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Relaterade l??nkar</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <ul class="text-dark">
        
          <li>
            <a href="#!"  class="text-dark">L??nk-4: https://www.amf.se/vara-fonder/spara-i-amfs-fonder
</a>
          </li>
          <li>
            <a href="#!"  class="text-dark">L??nk-5: https://www.migrationsverket.se/Andra-aktorer/EU-fonder.html

</a>
          </li>
          <li>
            <a href="#!"  class="text-dark">L??nk-6: https://www.mucf.se

</a>
          </li>
          <li>
            <a href="#!"  class="text-dark">L??nk-7: https://cfcu.gov.tr

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
          <i class="fas fa-home mr-3"></i> Stockholm</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@ghpf.se </p>
          <p>
          info@globalharmonyprojects.org</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
       <!-- <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
         -->
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
    ?? 2022 Copyright: 
    <a class="text-white" href="https://www.ghpf.se/">www.ghpf.se             &&        www.globalharmonyprojects.org</a>
  </div>
  <!-- Copyright -->

  <!-- Social buttons -->

  <!-- Copyright -->
 <!--       <div class="footer-copyright text-center py-3">?? 2020 Copyright:
             <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>        -->
  <!-- Copyright -->

</footer>
<!-- Footer -->
   

     <!--<div clas="container">
      <div class="col-md-9 text-info">
       <strong>Copyright</strong>
      </div>
      <div class="col-md-3">
       <ul class="social-network social-circle">
        <li><a href="#" class="icoFacebook" title="Facebook" ><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="#" class="icoTwetter" title="Twetter" ><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="#" class="icoInstagram" title="Instagram" ><i class="fab fa-instagram-square"></i></a></li> 
       </ul>
      </div>
      </div>
    -->
   

    
  </body>
</html>

<?php
include("config.php");
?>