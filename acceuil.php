<?php

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Movie and Stream - Catalogue de films</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form method="GET">
    <div class="search-container">
      <input type="text" class="search-input" name="recherche" placeholder="Rechercher un film...">
      <button class="btn">Recherche</button>
      <button class="btn">S'inscrire</button>
      <button class="btn">connexion</button>
      <button class="btn">Panier</button>
    </div>
     </form>
    <br>
    <div>
      <a href="action.php">
      <button class="btn">Action</button>
      </a>
      <a href="anime.php">
      <button class="btn">Anime</button>
      </a>
      <a href="horreur">
      <button class="btn">Horreur</button>
      </a>
    </div>  
    <br>
    <h1>Catalogue de films</h1>
    
    <p>Bienvenue sur Movie and Stream, votre source de films en ligne. Nous vous proposons un large choix de films dans différentes catégories pour répondre à tous vos goûts cinématographiques. Vous pouvez également acheter nos films directement sur notre site pour les visionner à tout moment.</p>
    
    <main>
		<div class="film">
			<img src="acc.jpg" width='800' height="800">
		</div>
	</main>
    
      
  </body>
</html>