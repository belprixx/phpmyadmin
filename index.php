<?php

session_start();
//session_destroy();
require_once ('Model/dbTools.php');
require_once ('Includes/config.php');
require_once ('Libs/smarty-3.1.29/libs/Smarty.class.php');

if (empty($_SESSION['User'])) { // Verif si utilisateur est connectée
	$is_connected = false;
}
else{
	$is_connected = true;
}

// On instancie Smarty
$Smarty = new Smarty();
/*
**	Définition des différentes actions possibles
**	sur une page
*/

if (!empty($_GET['action']) && array_key_exists($_GET['action'], $legalActions) && $is_connected == true) {
    $action = $_GET['action'];
}
else{
  if (!empty($_GET['action']) && $_GET['action'] == "checklogin") {
    $action = "checklogin";
  }
  elseif (empty($_GET['action']) && $is_connected == true) {
    $action = 'home';
  }
  elseif (empty($_GET['action']) && $is_connected == false){
      // L'action par default est à login
      $action = 'login';
  }
  else {
    $template = "404";
  }
}
if (file_exists('Controlleur/'.$legalActions[$action].'Controlleur.php')) {
    include 'Controlleur/'.$legalActions[$action].'Controlleur.php';
}else{
    $template = "404";
}
$Smarty->display("Views/views/header.tpl");
$Smarty->display('Views/views/templates/'.$template.'.tpl');
$Smarty->display('Views/views/footer.tpl');
