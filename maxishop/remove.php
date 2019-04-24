<?php
//$del = $_POST['toDelete'];
//$_SESSION['items'][$_POST['toDelete']] = null;
$deleteitem -> execute(array($_POST['toDelete']));
header("Location: index.php?navid=0");
?>
