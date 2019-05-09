<?php
$newUser = array();
$newUser['uname'] = $_POST ['bname'];
$newUser['email'] = $_POST [ 'email' ] ;
$newUser['pw'] = md5($_POST [ 'passwort' ]) ;
$newUser['vname'] = $_POST ['vname'];
$newUser['nname'] = $_POST ['nname'];
$newUser['isAdmin'] = 0;

if ( ! empty ( $uname ) AND ! empty ( $email ) AND ! empty ( $passwort )) {
  $register -> execute($newUser);
  $_SESSION['message'] = "Erfolgreich Registriert";
  header("Location: index.php");
}else{
  $_SESSION['message'] = "Registrierung fehlgeschlagen";
  header("Location: index.php");
}
?>
