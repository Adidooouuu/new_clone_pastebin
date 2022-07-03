<?php
  include("../config.php");

  // DEFINED DATAS
  $hostname = constant("HOST");
  $username = constant('USER');
  $bdd = constant('DBNAME');
  $pwd = constant('PWD');
  $links_table = constant('LINKS_TABLE');
  $users_table = constant('USERS_TABLE');

  // DB CONNECTION
  try
  {
    $bdd_connection = new PDO(
                                "mysql:host=$hostname; dbname=$bdd",
                                $username,
                                $pwd,
                                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
                              );
                              // [PDO::ATTR_EMULATE_PREPARES, false],
  }
  catch(Exception $e)
  {
    die("Erreur : " . $e->getMessage());
  }
?>
