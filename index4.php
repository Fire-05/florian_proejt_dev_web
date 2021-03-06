<!DOCTYPE html>
<!DOCTYPE html>
<html>
	<head>
		<title>Elizabeth</title>
		<link rel="stylesheet" type="text/css" href="style/style4.css">
		<script type="text/javascript" src="js/script4.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
        <h1>Elizabeth</h1>
      </header>
      <section>
        <div id="texte">
          <p>Elizabeth Liones est la protagoniste principale, la 3??Princesse du Royaume de Liones, une pr??sum??e survivante du Royaume de Danafor et une ancienne serveuse du Chapeau du Cochon au cours de son voyage pour retrouver les Sept P??ch??s Capitaux, devenant ainsi leur plus grande alli??e.<br>
		  Elle est ??galement la 107??R??incarnation de la D??esse Elizabeth, fille de la Divinit?? Supr??me,Pour cause d'avoir aid?? un des fils du Roi des D??mons durant la Guerre Sainte et en ??tre tomb??e amoureuse, Elizabeth a ??t?? punie par le Roi des D??mons d'une mal??diction qui la tue dans les 3 jours si elle r??cup??re la m??moire, pour ensuite se r??incarner sans aucun souvenir. et qui s'est ??galement r??incarn??e dans la Chevali??re Sacr??e appel??e Liz.<br>
		  Elle a de longs cheveux blancs argent??s. Un de ses yeux est bleu, quand ?? l'autre il est orange et porte le symbole des d??esses. Elle porte une seule boucle d'oreille, qui est bleue, sur son oreille gauche avec le symbole de la famille royale de Liones. Comme premi??re tenue, Elizabeth a port?? un ensemble noir sous une armure, pour se cacher des chevaliers sacr??s. Apr??s ??tre arriv?? au Boar Hat, elle porte l'uniforme de celui-ci, qui est une chemise rose assez courte pour qu'on voit son ventre accompagn??e d'une jupe tr??s courte. Apr??s la mort de meliodas Elizabeth porte une chemise bleue et une jupe blanche.<br>
		  Elizabeth est tr??s polie et reconnaissante, apparaissant initialement comme quelqu'un de fragile et fr??le, elle est en fait tr??s courageuse.<br>
		  Son attitude d??sint??ress??e et son courage sont montr??s quand elle essaye volontairement de sauver un enfant de l'attaque de Friesia. Elizabeth, d'autre part, est aussi une personne assez cr??dule, ??tant toujours dup??e par les combines de Meliodas pour profiter de ses avantages.<br>
		  Elle manque ??galement de confiance en elle puisqu'elle se consid??re comme un fardeau pour les Sept P??ch??s Capitaux. Elizabeth montre beaucoup de respect et de confiance envers les Sept P??ch??s Capitaux en les appelant "Seigneur" ou "Dame".<br>
		  Elle s'est montr?? forte ?? plusieurs reprises, comme quand Veronica meurt, Elizabeth est rest??e forte et a continu?? ?? se battre avec les P??ch??s Capitaux contre les Chevaliers Sacr??s, m??me si elle pleure souvent en pensant ?? elle.<br>
		  Elle aime Meliodas, mais ne lui a pas r??v??l?? ses sentiments car elle pense que Meliodas aime toujours Liz.<br>
          <p>
        </div>  
        <img src="img/elizabeth.png" alt="Elizabeth" id="image">
      </section>
      <div class="slideshow-container">
        <div class="slideshow-container">
          <div class="mySlides fade">
          <div class="numbertext">1 / 5</div>
          <img src="img/elizabethgoddess.png" style="width:100%">
          <div class="text">Elizabeth d??esse</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">2 / 5</div>
          <img src="img/elizabeth_rein01.png" style="width:100%">
          <div class="text">Premi??re r??incarnation</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">3 / 5</div>
          <img src="img/elizabeth_rein02.jpg" style="width:100%">
          <div class="text">106eme r??incarnation</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">4 / 5</div>
          <img src="img/elizabeth_enfant.jpg" style="width:100%">
          <div class="text">enfant</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">5 / 5</div>
          <img src="img/elizabeth_princess.jpg" style="width:100%">
          <div class="text">Princesse</div>
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