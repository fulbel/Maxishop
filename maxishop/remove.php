<?php
//$del = $_POST['toDelete'];
$_SESSION['items'][$_POST['toDelete']] = null;
header("Location: index.php?navid=0");
?>
