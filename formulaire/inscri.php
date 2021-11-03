<?php session_start(); 
	require_once('gestionBDD.php'); 

//________________________________ Récupération des variables du formulaire ___________________________________
	$password=$_POST['password'];
	$login=$_POST['login'];

//____________________________________ Méthode "grain de sel" ou "salt" ______________________________________
	$p2 = 'sd54^)$ùm*smfdù*jergqeg865647^*^$*m*9qd';
	$p1 = 'dqfg4.5*^p_ç_dfug*^lmdfgµ';
	$p3 = $p2.$password.$p1;

//___________________________________ hachage mot de passe : bcrypt  __________________________________________
	$pass_hache = password_hash($p3, PASSWORD_DEFAULT);

//_____________________________ Requete d'ajoue des informations dans la bdd  _________________________________

	try
	{
		$bdd = new PDO('mysql:host=localhost; dbname=exo', 'root', '');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $bdd->prepare('INSERT INTO inscription(password, login)
							  VALUES(:password, :login)');

		$sql ->execute(array('password' =>  $pass_hache, 'login' => $login)) ;

	}

	catch(PDOException $e)
	{
		echo "Erreur : " . $e->getMessage();
	}
	
	echo 'vous êtes inscrit';
	f_redirection('formulaire.php');

?>