<div class="row">
  <form class="col s12" method="post" action="index.php?navid=11.php">
    <h1>Artikel bearbeiten</h1>
    <div class="row">
      <?php
        echo "<td><div class='input-field col s2'><select name='edit'>"
              ."<option value='' disabled selected>Wähle Artikel</option>";
        foreach($pdo->query("SELECT * FROM item") AS $item){
            echo "<option value=".$item['name'].">".$item['name']."</option>";
        }
        echo "</select></td></tr>";
      ?>
    </div>
    <br><br><br><br><input type="submit" class="waves-effect waves-light btn" value="Artikel bearbeiten">
  </form>
</div>
