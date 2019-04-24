<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=shop','root','');
$additem = $pdo -> prepare(
  "INSERT INTO item (name,kosten,beschreibung,gewicht,menge,imgsrc)
   VALUES (?,?,?,?,?,?)");
$editname = $pdo -> prepare("UPDATE item name=? WHERE name=?");
$editkosten = $pdo -> prepare("UPDATE item kosten=? WHERE name=?");
$editbeschreibung = $pdo -> prepare("UPDATE item beschreibung=? WHERE name=?");
$editmenge = $pdo -> prepare("UPDATE item menge=? WHERE name=?");
$editgewicht = $pdo -> prepare("UPDATE item gewicht=? WHERE name=?");
$editimgsrc = $pdo -> prepare("UPDATE item imgsrc=? WHERE name=?");



$additem -> execute(array('Minecraft', 1, 'Ein lustiges Spielchen', 1, 1, '../img/minecraft.jpg'));
?>
