<div class="row">
  <?php
//echo $_POST['edit']; returns Minecraft
//echo $_POST['edit'];
echo print_r($_POST);
$b=$_POST['edit'];
//$item = $pdo->query("SELECT name,kosten,beschreibung,gewicht,menge,imgsrc FROM item WHERE name='".$b."'");
foreach($pdo->query("SELECT name,kosten,beschreibung,gewicht,menge,imgsrc FROM item WHERE name='".$b."'")as $item){
  //echo $item['name'];
}
?>
  <form class="col s12" method="post" action="index.php?navid=16" enctype="multipart/form-data">
    <h1>Artikel bearbeiten</h1>
    <div class="row">
      <div class="input-field col s1">
        <input value="<?php echo $item['name'];?>" name="name" id="bezeichnung" type="text" class="validate">
        <label for="bezeichnung">Bezeichnung</label>
      </div>
      <div class="input-field col s1">
        <input value="<?php echo $item['kosten'];?>" name="cost" id="kosten" type="text" class="validate">
        <label for="kosten">Kosten</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s2">
        <input value="<?php echo $item['beschreibung'];?>" name="descr" id="beschreibung" type="text" class="validate">
        <label for="beschreibung">Beschreibung</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s1">
        <input value="<?php echo $item['gewicht'];?>" name="weight" id="gewicht" type="text" class="validate">
        <label for="gewicht">Gewicht</label>
      </div>
      <div class="input-field col s1">
        <input value="<?php echo $item['menge'];?>" name="amount" id="menge" type="text" class="validate">
        <label for="menge">Menge</label>
      </div>
    </div>
    <div class="row">
       <div class="file-field input-field col s2">
          <div class="btn">
             <span>Bild hochladen</span>
             <input type="file" value="<?php echo $item['imgsrc'];?>" name="img">
          </div>
          <div class="file-path-wrapper">
             <input class="file-path validate" value="<?php echo $item['imgsrc'];?>" type="text">
          </div>
       </div>
    </div>
    <input type="submit" class="waves-effect waves-light btn" value="Artikel bearbeiten">
  </form>
</div>
