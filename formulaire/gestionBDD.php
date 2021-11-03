<?php
//___________________________________ FONCTIONS DE REDIRECTION ____________________________________

function f_redirection($lien, $duree=0)
{
	header ("Refresh: ".$duree.";URL=".strval($lien));
    exit;
}

//___________________________________ FONCTIONS DE CONNEXION ____________________________________

function seconnecter ($hote, $login, $password)
{
    $bdd = mysqli_connect($hote, $login, $password) or die ('Connexion à la base impossible !');
    return ($bdd);
}

function getConnexion()
{
    return seconnecter (HOTE, LOGIN, MDP, BASE);
}

?>