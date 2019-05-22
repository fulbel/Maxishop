<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=shop','root','');
$additem = $pdo -> prepare(
  "INSERT INTO item (name,kosten,beschreibung,gewicht,menge,imgsrc)
   VALUES (?,?,?,?,?,?)");
$deleteitem = $pdo -> prepare("DELETE FROM item WHERE name = ?");

$editname = $pdo -> prepare("UPDATE item name=? WHERE name=?");
$editkosten = $pdo -> prepare("UPDATE item kosten=? WHERE name=?");
$editbeschreibung = $pdo -> prepare("UPDATE item beschreibung=? WHERE name=?");
$editmenge = $pdo -> prepare("UPDATE item menge=? WHERE name=?");
$editgewicht = $pdo -> prepare("UPDATE item gewicht=? WHERE name=?");
$editimgsrc = $pdo -> prepare("UPDATE item imgsrc=? WHERE name=?");



?>
