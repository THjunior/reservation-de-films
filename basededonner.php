<?php 
$db = new PDO("mysql:host=localhost;dbname=data", 'root', '');
if (isset($_POST['envoyer'])) {
	$pseudo=$_POST['pseudo'];
	$pass=password_hash($_POST["password"], PASSWORD_DEFAULT);

    $requete= "INSERT INTO utilisateur(pseudo, password) VALUES (:pseudo, :password)";
    $exec = $db->prepare($requete);
    $exec ->execute(["pseudo"=>$pseudo, "password"=>$pass]);
    echo "enregistrement réussi";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
</head>
<body>

<form method="POST">
<input type="text" name="pseudo" placeholder="Pseudo">
<input type="text" name="password" placeholder="mot de passe">
<button type="submit" name="envoyer">s'inscrire</button>

</form>
</body>
</html>