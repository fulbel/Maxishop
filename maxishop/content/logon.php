<?php $bname = $_POST [ "bname" ] ;
$password = md5($_POST [ "password" ]);
$users = file ( "users.txt" ) ;
foreach ( $users AS $line ){
  $user_info = explode ( ";" , $line ) ;
if($user_info [ 2 ] == $bname AND $user_info [ 1 ] == $password){
  $_SESSION['a_user'] = $bname;
  header("Location: index.php");
  if(isset($_SESSION['message'])){
    unset($_SESSION['message']);
  }
  break;
}else {
  $_SESSION['message'] = "<script type='text/javascript'>alert('Eingaben Falsch');</script>";
  header("Location: index.php");
}
} ?>
