<?php 
$uname = $_POST ["bname"];
$pw = md5($_POST ["password"]);
$user = $pdo -> query("SELECT (uname,pw) FROM USER WHERE uname=".$uname." AND pw=".$pw)-> fetch();
if(isset($user['uname'])){
	$_SESSION['a_user'] = $bname;
  header("Location: index.php");
  if(isset($_SESSION['message'])){
    unset($_SESSION['message']);
  }
}else {
  $_SESSION['message'] = "<script type='text/javascript'>alert('Eingaben Falsch');</script>";
  header("Location: index.php");
}
?>
