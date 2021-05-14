<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Seven Dealy Sins</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
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
				<h1>SEVEN DEADLY SINS</h1>
			</header>
			<section>
				<div id="texte">
					<p>
						Bienvenue dans le monde de Seven Deadly Sins<br>
						C'est un site qui est fait pour les fans de ce manga et animé<br>
						Il y aura les historiques, les armes utilisés, les pouvoirs (etc...) de chaques personnages qui sont dans l'animé<br>
					</p>
				</div>
			</section>
		</div>
		<script>
			alert('Ne perdez pas de temps et entrez dans ce site !!!!!!!!!');
		</script>
		<script>
			function myFunction() {
			  document.getElementById("myDropdown").classList.toggle("show");
			}

			// Close the dropdown if the user clicks outside of it
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

