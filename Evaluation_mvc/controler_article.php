<?php
    //ajout de la vue
    include('vue_article.php');

    //connexion à la BDD
    include('connect_bdd.php');

    //test existence des champs nom_article et prix_article
    if(isset($_POST['nom_article']) and $_POST['nom_article']!="" 
and isset($_POST['prix_article']) and $_POST['prix_article']!= "") 
            {
  
    {

        //création des 2 variables qui vont récupérer le contenu des super globales POST
        $nom_article=$_POST['nom_article'];
        $prix_article=$_POST['prix_article'];
        
        //ajout du model qui va faire la requête d'enregistrement
        include('model_article.php.');

    }
}
?>
