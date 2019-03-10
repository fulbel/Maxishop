<?php
include '../open.php';
include '../header-gui.php';

if(isset($_GET["navid"])){
  switch ($_GET["navid"]){
    case 0:
      include 'shop.php';
      break;
    case 1:
      include 'cart.php';
      break;
    case 2:
      include 'buy.php';
      break;
    case 3:
      include 'add_article.php';
      break;
    case 4: default:
      include 'login.php';
      break;
    case 5:
      include 'register.php';
      break;
    case 6:
      include '../add.php';
      break;
    case 7:
      include 'rem_article.php';
      break;
    case 8:
      include '../remove.php';
      break;
    case 9:
      include '../delete_shop.php';
      break;
    case 10:
      include 'choose_edit_article.php';
      break;
    case 11:
      include 'edit_article.php';
      break;
    case 13:
      include 'abmelden.php';
      break;
    case 14;
      include 'logon.php';
      break;
    case 15:
      include 'registrierung.php';
  }
}else{
  include 'login.php';
}

include '../footer-gui.php';
?>
