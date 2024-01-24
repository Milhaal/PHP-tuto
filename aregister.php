<?php
// On indique qu'il y a une  base de donée
$pdo = new PDO(
  'mysql:host=mysql-team-roster-pro.alwaysdata.net;dbname=team-roster-pro_database;',
  '339632',
  'Super@0Groupe!',
  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

$role = 0;

$sqlInsert = "INSERT INTO MANAGER(username, mail, manager_password, manager_role) VALUES (:username, :mail, :manager_password, :manager_role)";

$sauce = array(
    ':username' => $_POST['username'],
    ':mail' => $_POST['email'],
    ':manager_password' => $_POST['password'],
    ':manager_role' => $role
);

$preInsert = $pdo->prepare($sqlInsert);
$preInsert->execute($sauce);

header('Location: index.php');
exit();

?>
