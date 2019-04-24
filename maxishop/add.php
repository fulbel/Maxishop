<?php
$new = array(
  "name" => $_POST['name'],
  "cost" => $_POST['cost'],
  "descr" => $_POST['descr'],
  "weight" => $_POST['weight'],
  "amount" => $_POST['amount'],
  "img" => $_FILES['img']['name'],
);
move_uploaded_file ($_FILES['img']['tmp_name'],'../img/'.$new['img']);
//$_SESSION['items'][$new['name']] = $new;
$additem -> execute(array($new['name'], $new['cost'], $new['descr'], $new['weight'], $new['amount'], $new['img']));
header("Location: index.php?navid=0");
?>
