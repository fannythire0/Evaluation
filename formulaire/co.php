<?php 

    session_start(); 
    require_once('gestionBDD.php');
    require_once('conf.php');

    $login=$_POST['login'];
    $password=$_POST['password'];

    $req = $bdd->prepare('SELECT * FROM inscription WHERE login =:login ');
    $req->execute(array('login'=>$login));

    $resultat = $req->fetch();

//__________________________________ Méthode "grain de sel" ou "salt" ____________________________________

    $p2 = 'sd54^)$ùm*smfdù*jergqeg865647^*^$*m*9qd';
    $p1 = 'dqfg4.5*^p_ç_dfug*^lmdfgµ';
    $p3 = $p2.$password.$p1;

//__________________________________ hachage mot de passe : bcrypt  ______________________________________

    $isPasswordCorrect = password_verify($p3, $resultat['password']);

//________________ Verification si bon login et bon mdp et si les champs sont remplis  ___________________

    if (empty($login) AND empty($password))
    {
        echo 'connectez vous !';
    }

    elseif (!$resultat)
    {
        echo 'Mauvais identifiant ou mot de passe !';
    }

    else
    {
        if ($isPasswordCorrect) {
            //session_start();
            $_SESSION['password'] = $resultat['password'];
            $_SESSION['login'] = $resultat['login'];
            $_SESSION['id'] = $resultat['id'];
            //f_redirection('menu2.php');
            echo 'vous êtes connecté';
        }
        else 
        {
            echo 'Mauvais identifiant ou mot de passe !!!';
        }
    }
?>
