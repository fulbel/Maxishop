<?php
$name = $_POST ['bname'];
$email = $_POST [ 'email' ] ;
$passwort = md5($_POST [ 'passwort' ]) ;
$vname = $_POST ['vname'];
$nname = $_POST ['nname'];
$date = $_POST ['date'];
$user_info = array ( $email , $passwort , $name , $vname, $nname, $date) ;
if ( ! empty ( $name ) AND ! empty ( $email ) AND ! empty ( $passwort ) AND ! empty ( $vname ) AND ! empty ( $nname ) AND ! empty ( $date )) {
  $eintrag = implode ( ";" , $user_info ) . "\r\n" ;
  file_put_contents ( "users.txt" , $eintrag , FILE_APPEND );
  $_SESSION['message'] = "Erfolgreich Registriert";
  header("Location: index.php");
}else{
  $_SESSION['message'] = "Registrierung fehlgeschlagen";
  header("Location: index.php");
}
?>
