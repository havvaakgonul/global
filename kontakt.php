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
<style>
    .kontakt{
  margin-top: 150px;
  padding-left: 20px;
  padding-right: 20px;
  background-color: #F8F9F9;
}
</style>

  </head>
  <body>
    
    <!--Menu-->
   
   <header class="header navbar navbar-expand-lg navbar-light bg-info fixed-top">
    <div class="container-fluid">
      
  <a class="navbar-brand pad0" href="#"><img src="img/logoorgınal.jfif" alt="logo" title="logo" width="80px" height="80px" class="img-round">
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
    
  <button class="btn btn-secondary dropdown-toggle " style="margin-right:10px" type="button" id="drop_yazı" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Svenska
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" onchange="set_language()" name="language" id="language">
   
    <a class="dropdown-item" id="sv" value="sv" href="#">Svenska</a>
    <a class="dropdown-item"  id="en" value="en" href="#">English</a>
    
   
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script>
    function set_language(){
      var language=jQery('#language').val();
      window.location.href='http://localhost/global/='+language;
    }
  </script>
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
<section class="kontakt">
<div >
<h6 class="text-uppercase font-weight-bold" id="kontakta">Kontakta Oss</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Stockholm</p>
        <p>
          <i class="fas fa-envelope mr-3"></i>  info@ghpf.se</p>
          <p>
          <i class="fas fa-envelope mr-3"></i>   info@globalharmonyprojects.org</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        </div>
        </section>