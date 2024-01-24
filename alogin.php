<?php
// On indique qu'il y a une  base de donée
$pdo = new PDO(
  'mysql:host=mysql-team-roster-pro.alwaysdata.net;dbname=team-roster-pro_database;',
  '339632',
  'Super@0Groupe!',
  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);


//var_dump($_POST['password']);

// On check si le mail est le même dans le formulaire et dans la table MANAGER
$sql = "SELECT * FROM MANAGER WHERE mail=:email";
$dataBinded = array(':email' => $_POST['email']);

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = current($pre->fetchAll(PDO::FETCH_ASSOC));

// SI c'est vide, c'est qu'il a pas trouvé de compte associé au mail, alors tu exit, sinon tu login
if(empty($user)) {
    header('Location:loris.php');
    exit();
} else {
    $_SESSION['user'] = $user;
    $_SESSION['login'] = true;
    header('Location:index.php');
    exit();
}
?>
