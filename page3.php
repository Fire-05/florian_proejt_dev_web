<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style/style3_php.css">
		<script type="text/javascript" src="js/script3.js"></script>
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
		<?php
		$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_commentaire;charset=utf8','root','');

		if (isset($_GET['id']) AND !empty($_GET['id'])) {
			$getid = htmlspecialchars($_GET['id']);

			$article = $bdd->prepare('SELECT * FROM article WHERE id = ?');
			$article->execute(array($getid));
			$article = $article->fetch();

			if(isset($_POST['submit_commentaire'])) {
      			if(isset($_POST['pseudo'],$_POST['commentaire']) AND !empty($_POST['pseudo']) AND !empty($_POST['commentaire'])) {
      				$pseudo = htmlspecialchars($_POST['pseudo']);
      				$commentaire = htmlspecialchars($_POST['commentaire']);
      				if(strlen($pseudo) < 25) {
      					$ins = $bdd->prepare('INSERT INTO commentairess (pseudo, commentaire, id_article, date_time_post) VALUES (?,?,?,NOW())');
            			$ins->execute(array($pseudo,$commentaire,$getid));
            			$c_msg = "<span style='color:white'>Votre commentaire a bien été posté</span>";
            		}else{

            			$c_msg = "Erreur: Le pseudo doit faire moins de 25 caractères";

            		}

      			}else {
         			$c_msg = "<span style='color:white'>Erreur: Tous les champs doivent être complétés</span>";
      			}
      		}
      		$commentaires = $bdd->prepare('SELECT * FROM commentairess WHERE id_article = ? ORDER BY id DESC');
   			$commentaires->execute(array($getid));
		}
		?>

		<div id="conteneur">
			<section>
				<header>
					<p>Si vous avez des questions ou des problèmes</p>
				</header>
				<img onclick="getElementById('plane').style.zIndex='1';"src="img/cute.jpg" alt="fun" id="fun">
			</section>
			<form method="POST">
				<input type="text" name="pseudo" placeholder="Votre pseudo" style="width: 280px;" /><br />
				<textarea name="commentaire" placeholder="Laissez un commentaire ^^" style="margin: 0px; height: 250px; width: 570px;"></textarea><br />
				<input type="submit" value="Poster mon commentaire" name="submit_commentaire" />
			</form>
			<?php if(isset($c_msg)) { echo $c_msg; } ?>
			<br />
			<?php while($c = $commentaires->fetch()){ ?>
				<b style= 'color:white';><?= $c['pseudo'] ?>:</b> <b style= 'color:white';><?= $c['commentaire'] ?></b> <b style= 'color:white';><?= $c['date_time_post'] ?></b><br />
			<?php }	?>
		</div>
		<div id="plane">
			<img id="sds" onclick="getElementById('plane').style.zIndex='-1';" src="img/fun2.jpg">
		</div>
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

<!-- onclick="if (getElementById('menu').style.display=='none') {getElementById('menu').style.display='block'}
		else{getElementById('menu').style.display='none'}
 pour le menu burger-->