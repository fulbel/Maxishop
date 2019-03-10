<div class="row">
  <h1>Registrieren</h1>
  <form action = "index.php?navid=15" method = "post" >
  <div class="input-field col s3">
     <input type = "text" name = "bname" id="bname"/>
     <label for="bname" >Benutzername:</label><br />
  </div>
  <div class="input-field col s3">
     <input type = "password" name = "passwort" id="passwort"/>
     <label for="name" >Passwort:</label><br />
  </div>
</div>
<div class="row">
  <div class="input-field col s3">
     <input type = "text" name = "email" id="email"/>
     <label for="email" >Email:</label><br />
  </div>
  <div class="input-field col s3">
     <input type = "text" name = "vname" id="vname"/>
     <label for="vname" >Vorname:</label><br />
  </div>
</div>
<div class="row">
  <div class="input-field col s3">
     <input type = "text" name = "nname" id="nname"/>
     <label for="nname" >Nachname:</label><br />
  </div>
  <div class="input-field col s3">
     <input type = "text" class="datepicker" name = "date" id="date"/>
     <label for="date" >Geburtsdatum:</label><br />
  </div>
</div>
  <button class="btn waves-effect waves-light" type="submit" name="action">Registrieren
    <i class="material-icons right">send</i>
  </button></form>
