<!DOCTYPE html>
	<html>
	<head>
		<title>Meliodas</title>
		<script type="text/javascript" src="js/script2.js"></script>
		<link rel="stylesheet" type="text/css" href="style/page2.css">
	</head>
	<body>

    <div class="navbar">
      <a href="index.html">ACCUEIL</a>
      
      <div class="dropdown">
        <button class="dropbtn" onclick="myFunction()">HISTORIQUE
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="myDropdown">
          <a href="index2.html">Meliodas</a>
          <a href="index4.html">Elizabeth</a>
          <a href="#">Ban</a>
        </div>
      </div>
       <a href="page3.html">CONCTACT</a>
       <button id="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

      <div id="id01" class="modal">
      
          <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="img/img6.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom" name="uname" required>

                <label for="psw"><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer mot de passe" name="psw" required>
            
                <button type="submit">Connecter</button>
                <label><input type="checkbox" checked="checked" name="remember"> Se souvenir</label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Fermer</button>
                <span class="psw">oublier?<a href="#">mot de passe</a></span>
            </div>
          </form>
      </div>
    </div>
    <div id="conteneur">
      <header>
        <h1>Meliodas</h1>
      </header>
      <section>
        <div id="texte">
          <p>Meliodas est le Dragon de la Colère qui dirige les Sept Péchés Capitaux. Il est le principal protagoniste de la série, et était le propriétaire du célèbre Chapeau du Cochon, une taverne. Son Trésor Sacré est la Trancheuse de Démons Lostvayne et sa principale capacité est le Contre Total. Il est également l'ancien Chef des Dix Commandements, en tant que Meliodas de la Charité, un ancien membre de l'Alliance Stigma, et le fils aîné du Roi des Démons.<br>
          En dépit de son apparence juvénile, Meliodas est en réalité beaucoup plus âgée, ayant plus de trois mille ans. Il est exceptionnellement petit comparé aux autres personnages, avec des cheveux blonds en bataille et des yeux vert émeraude. Il manque également de poils sur le visage, ce qui accentue encore son apparence d'adolescent. Indépendamment de sa stature et de son apparence jeune, il est relativement musclé et possède une gamme de muscles abdominaux bien développés. On lui montre souvent qu'il porte une chemise ordinaire à boutons blanche et propre et un gilet sans manches noir avec une cravate usée. Le fourreau de son épée brisée est maintenu par une ceinture en cuir vert avec des boucles dorées. Sans chaussettes, il porte une paire de bottes noires. Son trait le plus distinctif est son symbole de Dragon de la Colère gravé au sommet de son biceps gauche, juste en dessous de son épaule.<br>
          Lorsque Meliodas était à la tête des Dix Commandements, il portait un manteau blanc sans manches orné d'un lot de boutons noirs en forme de X autour du col haut, d'une doublure noire sur le manteau, d'une couleur rouge foncé à l'intérieur et d'une queue de manteau. Il avait aussi un pantalon noir avec des bottes de couleurs assorties. Meliodas a également brandi une épée large mais élégante, mais lors de son combat avec la Déesse Elizabeth contre le Roi des Démons et la Divinité Suprême, elle a été détruite.<br>
          Durant sa carrière de chef des Chevaliers Sacrés du Royaume de Danafall, Meliodas portait son armure traditionnelle, un peu comme celle de Cain Barzad. Et en tant que chef des Sept Péchés Capitaux, il portait une armure d'argent intégrale avec un casque unique, à l'instar du reste du groupe. Il a également brandi un poignard qui semblait être son trésor sacré. Meliodas a reçu une affiche recherchée, comme le reste des Péchés Capitaux, après avoir été accusé du meurtre de Zaratras. La dernière description fournie par son avis de recherche ne le décrit pas exactement, mais plutôt Estarossa de la Charité, son "frère cadet adoptif".<br>
          Après l'Arc d'Infiltration du Royaume de Liones, Meliodas arbore une nouvelle tenue ; une tunique blanche à manches longues et à col haut par-dessus un sous-vêtement, une paire de gants, un pantalon noir au genou et des bottes noires. Cette tenue est un peu plus formelle comme un uniforme avec l'inscription "Chapeau du Cochon" brodée sur son dos.
          Après son passage sa résurrection par le Roi des Démons, Meliodas a maintenant sept cicatrices permanentes où se trouvent ses cœurs et arbore une nouvelle marque noire similaire à celle qu’il avait auparavant en tant que chef des Dix Commandements. Il porte maintenant la première tenue qu'il portait auparavant.<br>
          Dans son Mode Assaut, Meliodas est entièrement nu sous une tenue composée d'énergie démoniaque. Elle était composé d'un manteau en forme de gilet qui ne couvrait que ses aisselles, évasé aux extrémités déchiquetées, et qui avait un col très haut et large. Meliodas a également deux serre-poignets, fabriqués à partir de la même énergie démoniaque que le reste de ses vêtements. Son pantalon est relié à ses pieds qui ressemblent aux pattes d'un oiseau, à la différence qu'il a cinq orteils.<br>
          <p>
        </div>  
        <img src="img/meliodas.png" alt="Meliodas" id="image">
      </section>
      <div class="slideshow-container">
        <div class="slideshow-container">
          <div class="mySlides fade">
          <div class="numbertext">1 / 5</div>
          <img src="img/img1.jpg" style="width:100%">
          <div class="text">Meliodas démon</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">2 / 5</div>
          <img src="img/img2.jpg" style="width:100%">
          <div class="text">Mode Assaut</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">3 / 5</div>
          <img src="img/img3.jpg" style="width:100%">
          <div class="text">Avis de recherche</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">4 / 5</div>
          <img src="img/img4.jpg" style="width:100%">
          <div class="text">10 commandement</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">5 / 5</div>
          <img src="img/img5.jpg" style="width:100%">
          <div class="text">Guerre Sainte</div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
    </div>
      <script>
          var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
        }
      </script>

      <script>
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')) {
        var myDropdown = document.getElementById("myDropdown");
          if (myDropdown.classList.contains('show')) {
            myDropdown.classList.remove('show');
          }
        }
      }
      </script>
  </body>
</html>	
	