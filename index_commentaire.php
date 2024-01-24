<!DOCTYPE html>

<!-- VOICI DU HTML → C'est le contenu du site -->
<html lang="en" dir="ltr" id="index">
  <head>
    <title>Team Roster Pro</title>
    <meta name="description" content="Login to lead your Esport team now.">
    <meta charset="utf-8">
    <!-- Let browser know website is optimized for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Disable the cache to avoid versioning problems -->
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
  </head>
  <!-- La balise <body>, c'est à l'intérieur qu'on va mettre le contenu (titres, textes, images, etc.) -->
  <body>

    <?php  
      // Les textes en vert sont des commentaires!
      // 1. Je souhaite afficher le nom de mon joueur sur la page depuis la base de données (BDD) du joueur
      // 2. Je souhaite aussi afficher tous les skills qui sont sur la BDD des skills

      // ETAPE 1 - JE CONNECTE MA BDD A MA PAGE
      $pdo = new PDO(
        'mysql:host=mysql-team-roster-pro.alwaysdata.net;dbname=team-roster-pro_database;', // 1.1) j'entre le nom de domaine et nom de la BDD
        '339632',         // 1.2) J'entre le nom d'utilisateur avec qui je me connecte sur phpmyadmin
        'Super@0Groupe!', // 1.3) J'entre le mot de passe avec qui je me connecte sur phpmyadmin
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

    // ETAPE 2 - JE RÉCUPÈRE TOUTES LES INFORMATIONS QUI M'INTÉRÈSSENT DANS MA BDD (maintenant connectée à la page)
    $sql = "SELECT * FROM PLAYER"; // 2.1) traduction : sélectionne TOUTES LE CONTENU de la table PLAYER (PLAYER est le nom de ma table dans phpmyadmin) 
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetch(PDO::FETCH_ASSOC); /* 2.2) Je FETCH le contenu de la première ligne UNE FOIS, étant donné que je n'ai qu'un joueur.
                                              fetch → ça veut dire que j'envoie les infos récupérées via l'étape 2.1) dans une variable nommée $data.
                                              $data → c'est une variable, imaginez que c'est un gros sac avec des infos stockées dedans, et qu'on va l'utiliser plus tard */
    
    
    // ETAPE 3 - MAINTENANT QUE J'AI LES INFOS DU JOUEUR STOCKÉES, JE VAIS LES AFFICHER SUR MON SITE (la titre et la bio pour rappel)
    ?>

    <h1><?php echo $data['player_name'] ?></h1> <?php /* 3.1) j'ouvre une balise HTML <h1> (c'est un titre), et à l'intérieur je sélectionne l'information que je veux,
                                                              c'est à dire DANS $data, j'affiche l'info dans la colonne 'player_name' (c'est le nom de la colonne du titre dans phpmyadmin).
                                                              Vous ça doit être 'name' ou quelque chose comme ça :) */ ?>
    
    <p><?php echo $data['player_bio'] ?></p> <?php // Je fais pareil avec la bio du joueur, je met une balise paragraphe <p>, je cherche la colonne de la bio de mon joueur 'player_bio' dans phpmyadmin et banco ?>


    <?php  
    // ETAPE 4 - JE VEUX AFFICHER TOUS LES SKILLS, JE RÉCUPÈRE TOUTES LES INFORMATIONS QUI M'INTÉRÈSSENT DANS MA BDD
    $sql = "SELECT * FROM SKILLS"; // comme dans l'étape 2.1), mais cette fois-ci on veut récupérer les infos de la table SKILLS et pas JOUEUR.
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $skills = $pre->fetchAll(PDO::FETCH_ASSOC); // Comme dans l'étape 2.2), mais cette fois-ci je FETCHALL car je veux le contenu de toutes les lignes, étant donné que j'ai plusieurs skills


    // ETAPE 5 - MAINTENANT QUE J'AI LES INFOS DES SKILLS STOCKÉES, JE VAIS LES AFFICHER SUR MON SITE
    ?>

    <?php foreach($skills as $skill) { // Boucle foreach ça permet de répéter x fois une action en fonction du contenu de la BDD ?>
      <p><?php echo $skill['skill'] // Dans ce cas on fait comme à l'étape 3.1 ou 3.2, mais cette fois-ci j'affiche x fois le nombre de skills que j'ai stockée dans ma BDD. ?></p>
    <?php }
    ?>

    <?php // voici à quoi ressemble une boucle foreach() vide.
    foreach($skills as $skill) {
      //contenu
    }
    ?>

    
  </body>
</html>


<!-- VOICI DU CSS → On ajoute du style au contenu HTML -->
<style>
h1 {
  color: red;
}
</style>
