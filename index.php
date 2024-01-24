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

  <body>
    <?php  
      $pdo = new PDO(
        'mysql:host=mysql-team-roster-pro.alwaysdata.net;dbname=team-roster-pro_database;',
        '339632',
        'Super@0Groupe!',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);


    $sql = "SELECT * FROM PLAYER";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetch(PDO::FETCH_ASSOC);
    ?>

    <h1><?php echo $data['player_name'] ?></h1>
    <p><?php echo $data['player_bio'] ?></p>


    <?php  
    $sql = "SELECT * FROM SKILLS";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $skills = $pre->fetchAll(PDO::FETCH_ASSOC);
    ?>


    <?php foreach($skills as $skill) { ?>
      <p><?php echo $skill['skill'] ?></p>
    <?php } ?>
  </body>
</html>


<!-- VOICI DU CSS → On ajoute du style au contenu HTML -->
<style>
h1 {
  color: red;
}
</style>
