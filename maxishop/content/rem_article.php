<div class="row">
  <form class="col s12" method="post" action="index.php?navid=8.php">
    <h1>Artikel löschen</h1>
    <div class="row">
      <?php
        echo "<td><div class='input-field col s2'><select name='toDelete'>"
              ."<option value='' disabled selected>Wähle Anzahl</option>";
        foreach($_SESSION['items'] AS $item){
          if($item!=null){
            echo "<option value=".$item['name'].">".$item['name']."</option>";
          }
        }
        echo "</select></td></tr>";
      ?>
    </div>
    <br><br><br><br><input type="submit" class="waves-effect waves-light btn" value="Artikel löschen">
  </form>
</div>
