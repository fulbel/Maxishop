<div class="row">
  <form class="col s12" method="post" action="index.php?navid=14">
    <h1>Anmelden</h1>
    <div class="row">
      <div class="input-field col s3">
        <input id="bname" name="bname" type="text" class="validate">
        <label for="bname">Benutzername</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s3">
        <input id="password" name="password" type="password" class="validate">
        <label for="password">Password</label>
      </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Anmelden
      <i class="material-icons right">send</i>
    </button>
  </form>
</div>
<?php
if(isset($_SESSION['message'])){
  echo $_SESSION['message'];
  unset($_SESSION['message']);
}
