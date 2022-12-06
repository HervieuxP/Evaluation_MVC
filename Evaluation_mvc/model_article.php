<?php
try{
    //Requête préparé
    $req = $bdd->prepare('insert into article (nom_article, prix_article) values (?,?)');

    //Binding de Paramètre -> j'injecte les infos de mon user dans la requête
    $req->bindParam(1,$nom_article,PDO::PARAM_STR);
    $req->bindParam(2,$prix_article,PDO::PARAM_STR);

    //Exécution de la requête
    $req->execute();

    //Message de validation
    echo"<p>L'article a bien été enregistré.</p>";

    $req=null;
    $bdd=null;

}catch(Exception $error){
    //affichage d'une exception en cas d’erreur
    die('Erreur : '.$error->getMessage());

    //fermeture de la connexion
    $req=null;
    $bdd=null;
} 
 ?>