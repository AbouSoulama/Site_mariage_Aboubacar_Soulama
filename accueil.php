<?php
session_start();
try
{
$bdd = new PDO('mysql:host=localhost;dbname=site_mariage', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de mariage</title>
    <link rel="shortcut icon" href="images/duran-kirsten-wedding-website.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="carousel.rtl.css">
    <link rel="shortcut icon" href="images/609544.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />




</head>
<body>

    <header>
        <nav>
        <ul>
        
            <img src="images/téléchargement (4).png" alt="" style="margin-top: -2.5%; height: 100px;border-radius: 50px; margin-right: 2%;">
            <li><a href="accueil.php">Accueil</a></li>
            <!-- <li><a href="#">Coordination</a></li> -->
            <!-- <li><a href="#">Portfolio</a></li> -->
            <li><a href="#">Service</a></li>
            <li><a href="#">A propos</a></li>
            <li><a href="#">Contact</a></li>
            
            
    
    <div class="nom">
    <?php
    if ($_SESSION['nom']) {
      echo $_SESSION['nom'];
    }?>
    
    </div>
    
    
     
    <div class="dec" style=>
    <?php
    if ($_SESSION['nom']) {
    echo '<button><a href="index.php">Déconnexion</a></button>';
    } ?>
    </div>
    
            
            
            
            <img src="images/téléchargement (4).jpg" alt="" style="margin-top: -2.5%; height: 100px;margin-left: 2%;border-radius: 50px;">
        
        </ul>
   </nav>
   
   <div style="margin-top: 12%;">
   <!-- <h1>Bienvenu au service d'assistance pour votre mariage</h1> -->
   <div class="he">
   <marquee behavior="" direction="" style="margin-top: 5%;">
   <h3>Nous somme a votre servie pour vous aidez a organiser votre mariage en vous offrant la totalités des secrvice neccesaires pour organiser un marige inoubliables</h3>
   </marquee>
   <marquee behavior="" direction="right">
   <img src="images/wedding-2595862_1280.jpg" alt="">
   <img src="images/6J4YcEYhare9XYeXMN1vII.jpg" alt="">
   <img src="images/241-08-face_3_191293-168804938795131.jpeg" alt="">
   <img src="images/128132165-heureuse-mariée-afro-américaine-en-voile-blanc-souriant-près-du-marié-et-des-fleurs.jpg" alt="">
   <img src="images/heureuse-mariee-marie-lors-ceremonie-mariage-ile-tropicale_53876-85586.jpg" alt="">
   <img src="images/medium-shot-bride-and-groom-posing-outdoors_23-2150639456.jpg" alt="">
   <img src="images/mariee-marie_1303-11471.jpg" alt="">
   <img src="images/29584-nicole-arienne-ok.jpeg" alt="">
   <img src="images/Team-Wedding-in-Style_front_large.jpg" alt="">
   
   </marquee>
   
   <marquee behavior="" direction="">
   <h3>Nous somme a votre servie pour vous aidez a organiser votre mariage en vous offrant la totalités des secrvice neccesaires pour organiser un marige inoubliables</h3>
   </marquee>
</div>
   <div class="ic" style="margin-top: -7%;">
    <img src="images/63e8da9968e3262a8ae5e991_engage.png" alt="">
    <img src="images/63e8da99eaf853532d5a5eb8_maroo-p-500.png" alt="">
    <img src="images/63e8da997073807a4727846f_guides-for-brides-p-500.png" alt="">
    <img src="images/63e8da99707380c4a927845b_wedding-sparrow-gold-p-500.png" alt="">
    <img src="images/63e8da998c09974b4cc18557_the-knot.png" alt="">
    </div>
   
   </div>

     </header>
     
     
     
     <section class="sect_1">
     <!-- <div class="ic0">
     <img src="images/nike.webp" alt="">
     <img src="images/yahoo.webp" alt="">
     <img src="images/unity.webp" alt="">
     <img src="images/sony.webp" alt="">
     <img src="images/samsung.webp" alt="">
     </div> -->
     <h1>Organiser un mariage inoubliables</h1>
     <p style="margin: 2% 10%;padding: 2% 5%;background: rgba(0, 0, 0, 0.815); color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae natus praesentium eos doloribus nemo debitis iusto rerum deleniti error. Fugiat accusamus laboriosam ullam inventore id qui, ratione impedit sint reiciendis.</p>
     <div class="di1">
     <div class="a">
     <div class="ov"><img src="images/29584-nicole-arienne-ok.jpeg" alt=""></div>
     <h2>Retrouvez les meuilleurs boutique pour les robes de marié</h2>
     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias maiores rem nihil dolore non! Debitis iusto iste quas consequatur quia, dolorum, non necessitatibus culpa sint facilis doloribus, laborum illum tenetur.</p>
     <button><a href="robes.php">voir plus</a></button>
     </div>
    
     <div class="b">
     <h2>Couple parfait</h2>
     <div>
     <div class="ove"><img src="images/wedding-2595862_1280.jpg" alt=""></div>
     <img class="pos" src="images/wedding-rings-2252438_1280.jpg" alt="">
     </div>
     </div>
    
     <div class="c">
     <div class="ov"><img src="images/marie-vue-laterale-costume-bleu_23-2149003490.jpg" alt=""></div>
        <h2>Retrouvez les meuilleurs boutique pour les costumes de marié</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, repellendus? Dicta rerum beatae sequi illo excepturi at cupiditate doloremque soluta repellendus natus perspiciatis laborum tempore voluptates, provident in. Harum, placeat.</p>
    <button><a href="robes.php">voir plus</a></button>
     </div>
    </div>
     
     </section>
     
     <section class="sect_2"> 
     
     <div>
     
     <h1>Découvrer les boutiques de ventes de bagues alliance</h1>
     <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati culpa et tenetur non est? Culpa voluptas accusantium aliquam cumque ullam. Est aspernatur autem accusamus inventore, nam saepe sed labore ducimus.</h5>
     <div class="alian">
     <div>
     <div class="ali"><img src="images/téléchargement.jpeg" alt=""></div>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo sint ut id minus labore temporibus possimus autem nam incidunt officiis? Eaque necessitatibus minima magni sit? Pariatur nam quis quasi voluptatum!</p>
     <button><a href="aliance.php">voir plus</a></button>
     </div>
     <div>
     <div class="ali"><img src="images/organisateur-mariage.jpg" alt=""></div>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero voluptatum dicta eius dolorum nihil saepe ut quasi veritatis autem impedit! Assumenda rerum omnis illo explicabo numquam doloremque sed dolores deleniti!</p>
     <button><a href="aliance.php">voir plus</a></button>
     </div>
     <div>
     <div  class="ali"><img src="images/alliance-mariage.jpg" alt=""></div>
     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, eos. Fugiat, exercitationem odio facilis veniam mollitia soluta, tempore impedit officia dolor, vero aliquam repudiandae hic perferendis suscipit harum accusantium itaque?</p>
     <button><a href="aliance.php">voir plus</a></button>
     </div>
     </div>
    </div>
     </section>
     
     <section class="sect_3">
      <h1>Une equipe  a l'écoute et très sympatiques </h1>
      <!-- <p>Une equipe  a l'écoute et très sympatiques , une prestation adaptée à toute à chacun, <br> je vous recomande fortement et sans hésitation les yeux fermés</p> -->
      <div class="equi">
     <div class="eq">
     <img class="img" src="images/Team-Wedding-in-Style_front_large.jpg" alt="">
     </div>
     <div class="eq">
     <h3>Notre equipe 100% disponible pour vous</h3>
     <p style="margin: 2% 0%;margin-left: 10%; padding: 2% 5%;background: rgba(255, 255, 255, 0.37); color: black;">Une equipe  a l'écoute et très sympatiques , une prestation adaptée à toute à chacun, je vous recomande fortement et sans hésitation les yeux fermés, officiis totam fugiat, doloribus tempore?
     <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nesciunt animi molestias ab, magni accusantium amet quod enim facere asperiores tempora sequi nostrum inventore dignissimos, officiis totam fugiat, doloribus tempore?
     <br><br>Maintenant ipsum dolor sit amet consectetur adipisicing elit. Dolor nesciunt animi molestias ab, magni accusantium amet quod enim facere asperiores tempora sequi nostrum inventore dignissimos, officiis totam fugiat, doloribus tempore?</p>
     <button><a href="equipe.php">voir plus</a></button>
     </div>
    </div>
    
     
     </section>
     
     <section class="sect_4">
     
     <h1>Possibilité de choisir un lieu pour votre mariage</h1>
     
     <div>
     <img class="z1" src="images/1af3ac54a54ba65fb6a270d16a890375.jpg" alt="">
     <img class="z2" src="images/tapis-blanc-ceremonie.jpg" alt="">
     <img class="z3" src="images/CcUPuzTR4aoAzBDTJd3CzZ.jpg" alt="">
   
     </div>
     
     <div class="or">
     <h3>Organiser votre cérémonie de mariage dans l'un de ces lieux magnifique</h3>
     <p style="margin: 2% 10%;padding: 2% 5%;background: rgba(63, 11, 11, 0.699); color: white;border-radius: 45%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo, accusantium dolorum fuga omnis fugit eum dicta. Impedit numquam deleniti optio ex vero, aut perferendis asperiores architecto, ducimus nam quis.</p>
    <div class="butt"> <button><a href="equipe.php">voir plus</a></button></div>
     </div>
     </section>
     
     <section style="background:#ffc18f17;margin-top: -5%;">
        <section class="sect_5" style="background-image: linear-gradient(rgba(10,10,10,0.5),rgba(20, 20, 20, 0.068),rgba(30,30,30,0.5));">
           <h1>Témoignages</h1>
           <div>
           
           
           <main>

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
        
          <div class="carousel-caption text-start">
          <div class="pro"><img src="images/64228f3e50a1d9bb4bd40b9d_tiffany-r-tiffany-l-1000x1000-p-500.jpg" alt="" style="height: 100px;width: 100px;border-radius: 50%;" alt=""></div>
          <p class="opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo similique temporibus mollitia, nam eligendi accusantium saepe delectus ex perspiciatis totam nulla iure qui unde possimus facere expedita ea, vitae consequatur?<p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </main>

           <!-- <div class="pro"><img src="images/64228f3e50a1d9bb4bd40b9d_tiffany-r-tiffany-l-1000x1000-p-500.jpg" alt="" style="height: 100px;width: 100px;border-radius: 50%;" alt=""></div>
          <p style="color: black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo similique temporibus mollitia, nam eligendi accusantium saepe delectus ex perspiciatis totam nulla iure qui unde possimus facere expedita ea, vitae consequatur?<p>
          <div class="button"><button><a href="">New</a></button></div> -->
           </div>

           </section>
        
           <div class="comment">
            <h6>Commentaire</h6>
                <form action="">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mettez votre commentaire"></textarea> <br>
                   <button type="submit">Soumettre</button>
                 </form>
              </div>


           </section>
           
            
           
           <section class="sect_1">
            <div class="ic0">
            <img src="images/nike.webp" alt="">
            <img src="images/yahoo.webp" alt="">
            <img src="images/unity.webp" alt="">
            <img src="images/sony.webp" alt="">
            <img src="images/samsung.webp" alt="">
            </div>
     
     



            

     
    
     <footer class="foot">

        <div>
        <a class="ff" href="">calendriers</a><br><br>
        <a href="">Documents essentiels</a><br><br>
        <a href="">Politiques UoPeople</a><br><br>
        <a href="">Catalogue</a><br><br>
        <a href=""><i class="fa-brands fa-linkedin icon"></i></a>
        <a href=""><i class="fa-brands fa-facebook icon"></i></a>
        <a href=""><i class="fa-brands fa-square-whatsapp icon"></i></a>
        <a href=""><i class="fa-brands fa-youtube icon"></i></a>
        </div><br><br>
        
        <div>
        <a class="ff" href="">Contacter-nous</a><br><br>
        <a href="">Bénévole</a><br><br>
        <a href="">Centre</a><br><br>
        <a href="">Administration</a><br><br>
        </div><br><br>
        <div>
        <a class="ff" href="">Blogues</a><br><br>
        <a href="">Evènement</a><br><br>
        <a href="">Préference</a><br><br>
        <a href="">Catalogue</a><br><br>
        
        </div><br><br>
        <div>
        <a class="ff" href="">Situation geographique</a><br><br>
        <a href="">Documents essentiels</a><br><br>
        <a href="">Politiques UoPeople</a><br><br>
        <a href="">Catalogue</a><br><br>
        </div><br><br>
        
        </footer>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4"  style="background: rgb(46, 44, 44);">
     <span style="color: bisque;"> © 2021 Copyright:</span>
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/" style="color: aliceblue;">N'ésitez pas à nous contacter</a>
    </div>
    <!-- Copyright -->
        
    
    
    
    

    <script src="script.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>












