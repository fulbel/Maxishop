<div class="row">
  <form class="col s12" method="post" action="index.php?navid=6.php" enctype="multipart/form-data">
    <h1>Artikel hinzufügen</h1>
    <div class="row">
      <div class="input-field col s1">
        <input name="name" id="bezeichnung" type="text" class="validate">
        <label for="bezeichnung">Bezeichnung</label>
      </div>
      <div class="input-field col s1">
        <input name="cost" id="kosten" type="text" class="validate">
        <label for="kosten">Kosten</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s2">
        <input name="descr" id="beschreibung" type="text" class="validate">
        <label for="beschreibung">Beschreibung</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s1">
        <input name="weight" id="gewicht" type="text" class="validate">
        <label for="gewicht">Gewicht</label>
      </div>
      <div class="input-field col s1">
        <input name="amount" id="menge" type="text" class="validate">
        <label for="menge">Menge</label>
      </div>
    </div>
    <div class="row">
       <div class="file-field input-field col s2">
          <div class="btn">
             <span>Bild hochladen</span>
             <input type="file" name="img">
          </div>
          <div class="file-path-wrapper">
             <input class="file-path validate" type="text">
          </div>
       </div>
    </div>
    <input type="submit" class="waves-effect waves-light btn" value="Artikel hinzufügen">
  </form>
</div>
