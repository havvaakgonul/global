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
      
  <a class="navbar-brand pad0" href="#"><img src="img/logoorg??nal.jfif" alt="cicek" title="logo" width="80px" height="80px" class="img-round">
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
          <a class="dropdown-item" href="index.php">M??l&Strategi/Syfte&Vision</a>
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
  <button class="btn btn-secondary dropdown-toggle " style="margin-right:10px" type="button" id="drop_yaz??" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

    
      <h5 class="mb-3 font-weight-bold text-left">?? 1. Namn och s??te: 
</h5>
      <p class=" text-justify  font-weight-normal ">
          F??reningens namn ??r ???Global Harmony Projects???. F??reningen har sitt s??te i Sollentuna i 
Stockholms l??n


          
      </p>
      
      <div style="text-align:center"><img src="img/logoorg??nal.jfif" class="stadgalogo" alt="..."></div>

      <h5 class="mb-3 font-weight-bold text-left">??  2. Form 
</h5>
      <p class=" text-justify  font-weight-normal ">
         Global Harmony Projects ??r en politisk och religi??st obunden ideell f??rening. F??reningen bygger i  grunden p?? frivillighet. F??reningen har ingen religi??s eller politisk motivation.
Syftet ??r att f??rbereder och genomf??r projekt f??r att bidra till utvecklingen av  globala 
samh??llet, s??rskilt de missgynnade / utsatta (som flyktingar, HGBTIQ+, ??ldre,  ensamma, barn och funktionshindrade individer) grupper.
      </p>

      <h5 class="mb-3 font-weight-bold text-left">?? 3. M??ls??ttning:
</h5>
      <p class=" text-justify  font-weight-normal ">
         F??reningen f??rbereder och genomf??r projekt i syfte att bidra till utvecklingen av hela 
samh??llet, s??rskilt de utsatta grupperna i samh??llet p?? nationell och internationell niv??. 
      </p>
<p class=" text-justify  font-weight-normal ">
         FF??rebyggande av radikalisering, diskriminering, kriminalisering av unga, marginalisering, segregation, s??kerst??llande av social fred, undanr??jande av ensamhet i samh??llet, 
f??rhindrande av separation i samh??llet med falska nyheter, integration av flyktingar med mera. Att f??rbereda och genomf??ra projekt med eller tillsammans med st??d av lokala och 
internationella institutioner och organisationer.  
      </p>


      <h5 class="mb-3 font-weight-bold text-left">??  4. Form 
</h5>
      <p class=" text-justify  font-weight-normal ">
         Global Harmony Projects ??r en politisk och religi??st obunden ideell f??rening. F??reningen bygger i  grunden p?? frivillighet. F??reningen har ingen religi??s eller politisk motivation.
Syftet ??r att f??rbereder och genomf??r projekt f??r att bidra till utvecklingen av  globala 
samh??llet, s??rskilt de missgynnade / utsatta (som flyktingar, HGBTIQ+, ??ldre,  ensamma, barn och funktionshindrade individer) grupper.
      </p>
      

       <div class="col md-2">
        <h4 class="mb-3 font-weight-bold text-center">F??RENINGENS MEDLEMMAR</h4>
        <hr class="ayrac"> 
     <h5 class="mb-3 font-weight-bold text-left">??  1. Medlemskap:

</h5>
      <p class=" text-justify  font-weight-normal ">
         Ordinarie medlemskap ??r,  acceptera f??reningens etablerings??ndam??l och syften,??ppet f??r den som st??djer f??reningens syfte och har betalat medlemsavgiften. 
      </p>
       <h5 class="mb-3 font-weight-bold text-left">?? 2. Uteslutning av Medlem:

</h5>
      <p class=" text-justify  font-weight-normal ">
         Styrelsen har r??tt att utesluta medlem som inte betalar fastst??lld avgift, mots??tter sig f??reningens verksamhet och ??ndam??l eller uppenbart skadar f??reningens intressen.
      </p>

      <h5 class="mb-3 font-weight-bold text-left">?? 3. Uttr??de:

</h5>
      <p class=" text-justify  font-weight-normal ">
        Den medlem som vill avsluta medlemskapet meddelar detta skriftligen till styrelsen. Medlem som inte betalar medlemsavgiften vid r??kenskaps??rets utg??ng ??r inte l??ngre medlem. 
      </p>
      <h5 class="mb-3 font-weight-bold text-left">?? 4. Extram??te:

</h5>
      <p class=" text-justify  font-weight-normal ">
         Styrelsen kan bjuda in medlemmar till ett extra ??rsm??te. Styrelsen ??r skyldig att ??rligen h??lla extra sammantr??de om s?? beg??rs av minst en tredjedel av styrelsens ledam??ter, revisorn eller de r??stber??ttigade i f??reningen. 
      </p>
      <h5 class="mb-3 font-weight-bold text-left">?? 5. Verksamhets??r:

</h5>
      <p class=" text-justify  font-weight-normal ">
         Verksamhets- och f??rvaltningsber??ttelser, revisorernas ber??ttelser, verksamhetsplan med budget samt styrelsens f??rslag och inkomna motioner med styrelsens yttrande skall finnas tillg??ngliga f??r medlemmarna senast en vecka f??re ??rsm??tet. I kallelsen skall anges var dessa handlingar finns tillg??ngliga.
      </p>
      
     </div>


       <div class="col md-2">
      <h4 class="mb-3 font-weight-bold text-center">ORDINARIE ??RSM??TE</h4>
      <hr class="ayrac"> 
      <h5 class="mb-3 font-weight-bold text-left">?? 1.Beslut, Omr??stning::

</h5>
      <p class=" text-justify  font-weight-normal ">
         R??st-, ??sikts- och f??rslagsr??tt p?? ??rsm??tet medlemmar som betalar medlemsavgift och fyller 18 ??r under m??tes??ret har r??tt att komma med synpunkter, f??rslag och r??ster p?? m??tet. 
R??str??tten ??r personlig. 
Kvorum: 
St??mmans beslutsf??rhet ??r lika med antalet n??rvarande medlemmar vid m??tet. 
Beslut och omr??stning: 
Beslut fattas med handuppr??ckning och majoritet av r??ster. Ledam??ter ??ver 18 ??r har r??tt att bli invalda i styrelse och revisorer. En anst??lld i f??reningen kan inte v??ljas till ledamot i 
f??reningens styrelse och revisor. 
      
<h5 class="mb-3 font-weight-bold text-left">?? 2. Stadge??ndring::

</h5>
      <p class=" text-justify  font-weight-normal ">
         F??r att ??ndra denna stadga kr??vs att det finns en majoritet (genom majoritetsbeslut) p?? 
??rsm??tet d??r minst 2/3 av medlemmarna ??r n??rvarande. Som ett alternativ; Stadgarna kan ??ndras vid tv?? p?? varandra f??ljande medlemsm??ten. 
      </p>
      
      <h5 class="mb-3 font-weight-bold text-left">?? 3. Styrelsen:

</h5>
      <p class=" text-justify  font-weight-normal ">
        Styrelsen best??r av en ordf??rande och 5 andra ledam??ter samt en suppleant. Ordf??randen och ??vriga ledam??ter v??ljs av ??rsm??tet f??r en tid av ett ??r. Styrelsen best??mmer andra positioner 
s??som vice vd, sekreterare, revisor och andra ansvariga efter behov. Den valda ledamoten kan utses till en tj??nst inom styrelsen. 
      </p>
      <h5 class="mb-3 font-weight-bold text-left">?? 4. Styrelsens uppgifter :

</h5>
      <p class=" text-justify  font-weight-normal ">
        Styrelsen ??r f??reningens beslutande organ och ansvarar f??r f??reningens angel??genheter. 
Styrelsen ansvarar f??r f??reningens  verksamhet enligt fastst??llda planer inom ramen f??r denna stadga och tillvaratar medlemmarnas intressen. 
      </p>
      <h5 class="mb-3 font-weight-bold text-left">?? 4. Uppmaning, beslutsf??rhet och omr??stning :

</h5>
      <p class=" text-justify  font-weight-normal ">
        Alla m??ten och aktiviteter kan h??llas online eller i fysiska milj??er. Styrelsen sammantr??der 
efter att ordf??randen kallat till m??te eller p?? beg??ran av minst h??lften av det totala antalet 
ledam??ter. M??teskallelse och kallelse kan ske via sms, e-post eller  webbannonsering. 
Styrelsen ??r beslutf??r n??r samtliga ledam??ter ??r kallade och minst h??lften av det totala antalet ledam??ter ??r n??rvarande. Alla beslut kr??ver att minst h??lften av styrelseledam??terna ??r ??verens om beslutet. Vid lika r??stetal ??r ordf??randens r??st avg??rande. Vid m??tet f??rs 
protokoll. 
      </p>
      
      <h5 class="mb-3 font-weight-bold text-left">?? 5.  ??verl??telse av beslutander??tt :

</h5>
      <p class=" text-justify  font-weight-normal ">
        Styrelsen f??r delegera beslutander??tt i enskilda ??renden till en arbetsgrupp, en ledamot eller en anst??lld. Delegater ska l??pande rapportera till styrelsen. 
      </p>

       <h5 class="mb-3 font-weight-bold text-left">?? 6.  Ekonomi (Finansiering, medlemsavgift)  :

</h5>
      <p class=" text-justify  font-weight-normal ">
        Den som blir f??rtroendevald till detta uppdrag b??r ha ett stort intresse och engagemang i f??reningen. Kass??ren b??r ??ven ha erfarenhet av eller kunskap om f??rh??llandet mellan 
ekonomi och verksamhet i f??reningslivet. Kass??ren har hand om de ??vergripande 
ekonomiska uppgifterna. Man kan s??ga att kass??ren f??rvaltar f??reningens ekonomiska 
tillg??ngar. 
      </p>

       <h5 class="mb-3 font-weight-bold text-left">?? 7.  Revision :

</h5>
      <p class=" text-justify  font-weight-normal ">
       Att f??retr??da medlemmarna och granska styrelsens arbete. Revisorer v??ljs av f??reningens 
medlemmar, s??som styrelsen, p?? ??rsm??tet. Antalet revisorer som f??reningen ska ha regleras i bolagsordningen. Revisorer ska vara aktiva under hela r??kenskaps??ret. 
      </p>
       <h5 class="mb-3 font-weight-bold text-left">?? 8.  Firmatecknare  :

</h5>
      <p class=" text-justify  font-weight-normal ">
      Ordf??rare, sekreterare och kass??r.
      </p>
       <h5 class="mb-3 font-weight-bold text-left">?? 9.  Uppl??sning :

</h5>
      <p class=" text-justify  font-weight-normal ">
       F??r f??reningens uppl??sning kr??vs beslut av minst 2/3 av de n??rvarande vid m??tet. Vid beslut om f??reningens uppl??sning b??r det ocks?? beslutas hur f??reningens tillg??ngar ska anv??ndas. 
      </p>
      <h5 class="mb-3 font-weight-bold text-left">?? 10.  Instruktioner med Kommentarer  :

</h5>
      <p class=" text-justify  font-weight-normal ">
       F??reningens styrelse f??r bilda arbetsgrupper inom de omr??den som beh??vs. Dessa 
arbetsgruppers arbetss??tt best??ms av styrelsen och n??dv??ndiga instruktioner skapas och f??ljs upp. 
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
       <h6 class="text-uppercase font-weight-bold">Relaterade l??nkar</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <ul class=" text-dark">
          <li>
            <a href="#!" class="text-dark">L??nk-1: https://eufonder.se/eu-fonder.html
</a>
          </li>
          <li>
            <a href="#!" class="text-dark">L??nk-2: https://www.esf.se/vara-fonder/socialfonden/
</a>
          </li>
          <li>
            <a href="#!" class="text-dark">L??nk-3: https://jordbruksverket.se/stod/programmen-som-finansierar-stoden/eu-fonderna</a>
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
            <a href="#!" class="text-dark">L??nk-4: https://www.amf.se/vara-fonder/spara-i-amfs-fonder
</a>
          </li>
          <li>
            <a href="#!" class="text-dark">L??nk-5: https://www.migrationsverket.se/Andra-aktorer/EU-fonder.html

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