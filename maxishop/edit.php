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
//$_SESSION['items']['edit'] = $new;
//$edititem -> execute(array($new['name'], $new['cost'], $new['descr'], $new['weight'], $new['amount'], $new['img'], $new['name']));
$editname -> execute(array($new['name'], $new['name']));
$editkosten -> execute(array($new['cost'], $new['name']));
$editbeschreibung -> execute(array($new['descr'], $new['name']));
$editmenge -> execute(array($new['amount'], $new['name']));
$editgewicht -> execute(array($new['weight'], $new['name']));
$editimgsrc -> execute(array($new['img'], $new['name']));
//$edititem -> execute(array('1', '1', '1', '1', '1', '1', 'Minecraft'));
header("Location: index.php?navid=0");
?>
