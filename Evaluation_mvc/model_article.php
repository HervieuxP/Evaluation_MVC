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

    //Nouvelle requête pour récupérer l'id_user enregistré
    $req = $bdd->prepare('select id_vendeur from ticket where id_vendeur = ?');
    //Binding de Paramètre -> j'injecte les infos de mon user dans la requête
    $req->bindParam(1,$id_vendeur,PDO::PARAM_STR);
    //Exécution de la requête
    $req->execute();

    //stocke la réponse de la BDD
    $data = $req->fetchAll();

    //j'extrait la donnée que je veux, depuis mon tableau de tableaux associatifs $data
    $id_user;
    foreach($data as $row){
        $id_vendeur = $row['id_vendeur'];
    }


}catch(Exception $error){
    //affichage d'une exception en cas d’erreur
    die('Erreur : '.$error->getMessage());

    //fermeture de la connexion
    $req=null;
    $bdd=null;
} 
 ?>