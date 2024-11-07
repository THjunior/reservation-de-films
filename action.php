<?php
 $base = new PDO("mysql:host=localhost;dbname=projetphp", 'root', '');
 $allmovie = $base->query('SELECT * FROM films');
 if(isset($_GET['recherche']) AND !empty($_GET['recherche'])){
	$recherche= htmlspecialchars($_GET['recherche'])
	$allmovie = $base->query('SELECT nom FROM films WHERE nom LIKE"%'.$recherche.'%"')
 }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Action</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <form method="GET">
    <div class="search-container">
      <input type="text" class="search-input" name="recherche" placeholder="Rechercher un film...">
      <input type="sumbit" name="Rechercher" class="btn">Recherche</input>
      <button class="btn">S'inscrire</button>
      <button class="btn">connexion</button>
      <button class="btn">Panier</button>
    </div>
     </form>
    <br>
    <div>
      <button class="btn">Action</button>
	  <a href="anime">
      <button class="btn">Anime</button>
	  </a>
      <a href="horreur.php">
      <button class="btn">Horreur</button>
      </a>
    </div>  

    <main>
		<div class="avenger">
				<img src="avenger.jpg" width="300" height="400">
				<p class="titre">Avenger</p>
				<p class="description">Réalisateur:</p>
				<p class="date">Date de sortie : 01/01/2022</p>
                <button class="btn">ajouter au panier</button>
		</div>
		<div class="BS">
				<img src="BS.jpg" width="300" height="400">
				<p class="titre">Bloodshoot</p>
				<p class="description">Réalisateur:</p>
				<p class="date">Date de sortie : 01/01/2022</p>
                <button class="btn">ajouter au panier</button>
		</div>
    <div class="DS">
				<img src="DS.jpg" width="300" height="400">
				<p class="titre">Docteur Strange</p>
				<p class="description">Réalisateur:</p>
				<p class="date">Date de sortie : 01/01/2022</p>
                <button class="btn">ajouter au panier</button>
		</div> 
    <div class="hobbit">
				<img src="hobbit.jpg" width="300" height="400">
				<p class="titre">Hobbit</p>
				<p class="description">Réalisateur:</p>
				<p class="date">Date de sortie : 01/01/2022</p>
                <button class="btn">ajouter au panier</button>
		</div>
    <div class="HP">
				<img src="HP.jpg" width="300" height="400">
				<p class="titre">Harry Potter</p>
				<p class="description">Réalisateur:</p>
				<p class="date">Date de sortie : 01/01/2022</p>
                <button class="btn">ajouter au panier</button>
		</div>
        <div class="hulk">
				<img src="hulk.jpg" width="300" height="400">
				<p class="titre">Hult</p>
				<p class="description">Réalisateur:</p>
				<p class="date">Date de sortie : 01/01/2022</p>
                <button class="btn">ajouter au panier</button>
		</div> 
        <div class="marine">
				<img src="marine.jpg" width="300" height="400">
				<p class="titre">Marine</p>
				<p class="description">Réalisateur:</p>
				<p class="date">Date de sortie : 01/01/2022</p>
                <button class="btn">ajouter au panier</button>
		</div>
        <div class="matrix">
				<img src="matrix.jpg" width="300" height="400">
				<p class="titre">Matrix</p>
				<p class="description">Réalisateur:</p>
				<p class="date">Date de sortie : 01/01/2022</p>
                <button class="btn">ajouter au panier</button>
		</div>
        <div class="RN">
				<img src="RN.jpg" width="300" height="400">
				<p class="titre">Red Notic</p>
				<p class="description">Réalisateur:</p>
				<p class="date">Date de sortie : 01/01/2022</p>
                <button class="btn">ajouter au panier</button>
		</div> 
        <div class="thor">
				<img src="thor.jpg" width="300" height="400">
				<p class="titre">Thor</p>
				<p class="description">Réalisateur:</p>
				<p class="date">Date de sortie : 01/01/2022</p>
                <button class="btn">ajouter au panier</button>
		</div>
		<section class="afficher_recherche">
		 <?php
		 if($allmovie->rowCount() > 0){

		 }
		 else{
			<p>aucun films trouvées</p>
		 }
		 ?>
		</section>
	</main>
    
      
  </body>
</html>