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

    <title>Stadgar</title>
  </head>
  <body>
    
    <!--Menu-->
   
   <header class="header navbar navbar-expand-lg navbar-light bg-info fixed-top">
    <div class="container-fluid">
      
  <a class="navbar-brand pad0" href="#"><img src="img/logoorgınal.jfif" alt="cicek" title="logo" width="80px" height="80px" class="img-round">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <span class="logoyaniyazisi text-white hidden-xs font-weight-bold">Global Harmony Projekts
  </span>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
    <!--  <li class="nav-item active">
        <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
      </li>  -->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" style="margin-left:15px"href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Om GHP
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php">Mål&Strategi/Syfte&Vision</a>
          <a class="dropdown-item" href="stadgar.php">Stadgar</a>
          <a class="dropdown-item" href="#">Stryelse</a>
          
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Projekt
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Tillvägagångssätt</a>
          <a class="dropdown-item" href="#">Projektbeskrivning</a>
          <a class="dropdown-item" href="#">Söka projektmedel</a>
           <a class="dropdown-item" href="#">Utvärdering och rapportering</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Aktiviteter
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Årlig Kalender</a>
          
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
  <button class="btn btn-secondary dropdown-toggle " style="margin-right:10px" type="button" id="drop_yazı" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Svenska
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   
    <a class="dropdown-item" id="sv" href="#">Svenska</a>
    <a class="dropdown-item"  id="en" href="#">English</a>
   
  </div>
  </div>
   <!--<ul class="nav navbar-nav navbar-right pad5 text-white">
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

  <!--Header-->

    <section class="stadgar" >
       
     <h4 class="mb-3 font-weight-bold text-center" >S T A D G A R</h4>
      <hr class="ayrac"> 
     <div id="container-fluid">
      <div class="col md-2">

    
      <h5 class="mb-3 font-weight-bold text-left">§ 1. Namn och säte: 
</h5>
      <p class=" text-justify  font-weight-normal ">
          Föreningens namn är ”Global Harmony Projects”. Föreningen har sitt säte i Sollentuna i 
Stockholms län


          
      </p>
      
      <div style="text-align:center"><img src="img/logoorgınal.jfif" class="stadgalogo" alt="..."></div>

      <h5 class="mb-3 font-weight-bold text-left">§  2. Form 
</h5>
      <p class=" text-justify  font-weight-normal ">
         Global Harmony Projects är en politisk och religiöst obunden ideell förening. Föreningen bygger i  grunden på frivillighet. Föreningen har ingen religiös eller politisk motivation.
Syftet är att förbereder och genomför projekt för att bidra till utvecklingen av  globala 
samhället, särskilt de missgynnade / utsatta (som flyktingar, HGBTIQ+, äldre,  ensamma, barn och funktionshindrade individer) grupper.
      </p>

      <h5 class="mb-3 font-weight-bold text-left">§ 3. Målsättning:
</h5>
      <p class=" text-justify  font-weight-normal ">
         Föreningen förbereder och genomför projekt i syfte att bidra till utvecklingen av hela 
samhället, särskilt de utsatta grupperna i samhället på nationell och internationell nivå. 
      </p>
<p class=" text-justify  font-weight-normal ">
         FFörebyggande av radikalisering, diskriminering, kriminalisering av unga, marginalisering, segregation, säkerställande av social fred, undanröjande av ensamhet i samhället, 
förhindrande av separation i samhället med falska nyheter, integration av flyktingar med mera. Att förbereda och genomföra projekt med eller tillsammans med stöd av lokala och 
internationella institutioner och organisationer.  
      </p>


      <h5 class="mb-3 font-weight-bold text-left">§  4. Form 
</h5>
      <p class=" text-justify  font-weight-normal ">
         Global Harmony Projects är en politisk och religiöst obunden ideell förening. Föreningen bygger i  grunden på frivillighet. Föreningen har ingen religiös eller politisk motivation.
Syftet är att förbereder och genomför projekt för att bidra till utvecklingen av  globala 
samhället, särskilt de missgynnade / utsatta (som flyktingar, HGBTIQ+, äldre,  ensamma, barn och funktionshindrade individer) grupper.
      </p>
      

       <div class="col md-2">
        <h4 class="mb-3 font-weight-bold text-center">FÖRENINGENS MEDLEMMAR</h4>
        <hr class="ayrac"> 
     <h5 class="mb-3 font-weight-bold text-left">§  1. Medlemskap:

</h5>
      <p class=" text-justify  font-weight-normal ">
         Ordinarie medlemskap är,  acceptera föreningens etableringsändamål och syften,öppet för den som stödjer föreningens syfte och har betalat medlemsavgiften. 
      </p>
       <h5 class="mb-3 font-weight-bold text-left">§ 2. Uteslutning av Medlem:

</h5>
      <p class=" text-justify  font-weight-normal ">
         Styrelsen har rätt att utesluta medlem som inte betalar fastställd avgift, motsätter sig föreningens verksamhet och ändamål eller uppenbart skadar föreningens intressen.
      </p>

      <h5 class="mb-3 font-weight-bold text-left">§ 3. Utträde:

</h5>
      <p class=" text-justify  font-weight-normal ">
        Den medlem som vill avsluta medlemskapet meddelar detta skriftligen till styrelsen. Medlem som inte betalar medlemsavgiften vid räkenskapsårets utgång är inte längre medlem. 
      </p>
      <h5 class="mb-3 font-weight-bold text-left">§ 4. Extramöte:

</h5>
      <p class=" text-justify  font-weight-normal ">
         Styrelsen kan bjuda in medlemmar till ett extra årsmöte. Styrelsen är skyldig att årligen hålla extra sammanträde om så begärs av minst en tredjedel av styrelsens ledamöter, revisorn eller de röstberättigade i föreningen. 
      </p>
      <h5 class="mb-3 font-weight-bold text-left">§ 5. Verksamhetsår:

</h5>
      <p class=" text-justify  font-weight-normal ">
         Verksamhets- och förvaltningsberättelser, revisorernas berättelser, verksamhetsplan med budget samt styrelsens förslag och inkomna motioner med styrelsens yttrande skall finnas tillgängliga för medlemmarna senast en vecka före årsmötet. I kallelsen skall anges var dessa handlingar finns tillgängliga.
      </p>
      
     </div>


       <div class="col md-2">
      <h4 class="mb-3 font-weight-bold text-center">ORDINARIE ÅRSMÖTE</h4>
      <hr class="ayrac"> 
      <h5 class="mb-3 font-weight-bold text-left">§ 1.Beslut, Omröstning::

</h5>
      <p class=" text-justify  font-weight-normal ">
         Röst-, åsikts- och förslagsrätt på årsmötet medlemmar som betalar medlemsavgift och fyller 18 år under mötesåret har rätt att komma med synpunkter, förslag och röster på mötet. 
Rösträtten är personlig. 
Kvorum: 
Stämmans beslutsförhet är lika med antalet närvarande medlemmar vid mötet. 
Beslut och omröstning: 
Beslut fattas med handuppräckning och majoritet av röster. Ledamöter över 18 år har rätt att bli invalda i styrelse och revisorer. En anställd i föreningen kan inte väljas till ledamot i 
föreningens styrelse och revisor. 
      
<h5 class="mb-3 font-weight-bold text-left">§ 2. Stadgeändring::

</h5>
      <p class=" text-justify  font-weight-normal ">
         För att ändra denna stadga krävs att det finns en majoritet (genom majoritetsbeslut) på 
årsmötet där minst 2/3 av medlemmarna är närvarande. Som ett alternativ; Stadgarna kan ändras vid två på varandra följande medlemsmöten. 
      </p>
      
      <h5 class="mb-3 font-weight-bold text-left">§ 3. Styrelsen:

</h5>
      <p class=" text-justify  font-weight-normal ">
        Styrelsen består av en ordförande och 5 andra ledamöter samt en suppleant. Ordföranden och övriga ledamöter väljs av årsmötet för en tid av ett år. Styrelsen bestämmer andra positioner 
såsom vice vd, sekreterare, revisor och andra ansvariga efter behov. Den valda ledamoten kan utses till en tjänst inom styrelsen. 
      </p>
      <h5 class="mb-3 font-weight-bold text-left">§ 4. Styrelsens uppgifter :

</h5>
      <p class=" text-justify  font-weight-normal ">
        Styrelsen är föreningens beslutande organ och ansvarar för föreningens angelägenheter. 
Styrelsen ansvarar för föreningens  verksamhet enligt fastställda planer inom ramen för denna stadga och tillvaratar medlemmarnas intressen. 
      </p>
      <h5 class="mb-3 font-weight-bold text-left">§ 4. Uppmaning, beslutsförhet och omröstning :

</h5>
      <p class=" text-justify  font-weight-normal ">
        Alla möten och aktiviteter kan hållas online eller i fysiska miljöer. Styrelsen sammanträder 
efter att ordföranden kallat till möte eller på begäran av minst hälften av det totala antalet 
ledamöter. Möteskallelse och kallelse kan ske via sms, e-post eller  webbannonsering. 
Styrelsen är beslutför när samtliga ledamöter är kallade och minst hälften av det totala antalet ledamöter är närvarande. Alla beslut kräver att minst hälften av styrelseledamöterna är överens om beslutet. Vid lika röstetal är ordförandens röst avgörande. Vid mötet förs 
protokoll. 
      </p>
      
      <h5 class="mb-3 font-weight-bold text-left">§ 5.  Överlåtelse av beslutanderätt :

</h5>
      <p class=" text-justify  font-weight-normal ">
        Styrelsen får delegera beslutanderätt i enskilda ärenden till en arbetsgrupp, en ledamot eller en anställd. Delegater ska löpande rapportera till styrelsen. 
      </p>

       <h5 class="mb-3 font-weight-bold text-left">§ 6.  Ekonomi (Finansiering, medlemsavgift)  :

</h5>
      <p class=" text-justify  font-weight-normal ">
        Den som blir förtroendevald till detta uppdrag bör ha ett stort intresse och engagemang i föreningen. Kassören bör även ha erfarenhet av eller kunskap om förhållandet mellan 
ekonomi och verksamhet i föreningslivet. Kassören har hand om de övergripande 
ekonomiska uppgifterna. Man kan säga att kassören förvaltar föreningens ekonomiska 
tillgångar. 
      </p>

       <h5 class="mb-3 font-weight-bold text-left">§ 7.  Revision :

</h5>
      <p class=" text-justify  font-weight-normal ">
       Att företräda medlemmarna och granska styrelsens arbete. Revisorer väljs av föreningens 
medlemmar, såsom styrelsen, på årsmötet. Antalet revisorer som föreningen ska ha regleras i bolagsordningen. Revisorer ska vara aktiva under hela räkenskapsåret. 
      </p>
       <h5 class="mb-3 font-weight-bold text-left">§ 8.  Firmatecknare  :

</h5>
      <p class=" text-justify  font-weight-normal ">
      Ordförare, sekreterare och kassör.
      </p>
       <h5 class="mb-3 font-weight-bold text-left">§ 9.  Upplösning :

</h5>
      <p class=" text-justify  font-weight-normal ">
       För föreningens upplösning krävs beslut av minst 2/3 av de närvarande vid mötet. Vid beslut om föreningens upplösning bör det också beslutas hur föreningens tillgångar ska användas. 
      </p>
      <h5 class="mb-3 font-weight-bold text-left">§ 10.  Instruktioner med Kommentarer  :

</h5>
      <p class=" text-justify  font-weight-normal ">
       Föreningens styrelse får bilda arbetsgrupper inom de områden som behövs. Dessa 
arbetsgruppers arbetssätt bestäms av styrelsen och nödvändiga instruktioner skapas och följs upp. 
      </p>
      
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
       <h6 class="text-uppercase font-weight-bold">Relaterade länkar</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <ul class=" text-dark">
          <li>
            <a href="#!" class="text-dark">Länk-1: https://eufonder.se/eu-fonder.html
</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Länk-2: https://www.esf.se/vara-fonder/socialfonden/
</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Länk-3: https://jordbruksverket.se/stod/programmen-som-finansierar-stoden/eu-fonderna</a>
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
            <a href="#!" class="text-dark">Länk-4: https://www.amf.se/vara-fonder/spara-i-amfs-fonder
</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Länk-5: https://www.migrationsverket.se/Andra-aktorer/EU-fonder.html

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
          <i class="fas fa-home mr-3"></i> Stockholm </p>
        <p>
        <i class="fas fa-envelope mr-3"></i> info@ghpf.se </p>
          <p>
          info@globalharmonyprojects.org</p>
        
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
       <!-- <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p> -->

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