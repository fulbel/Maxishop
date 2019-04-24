<h1>Shop</h1>
    <!--<a class="waves-effect waves-light btn-small" href="index.php?navid=9.php">Shop leeren</a>!-->
<?php
//$edititem -> execute(array('1', '1', '1', '1', '1', '1', 'Minecraft'));
//echo print_r($_POST);
?>
    <nav>
      <div class="nav-wrapper">
        <form action = "index.php?navid=0" method = "post">
          <div class="input-field">
            <input id="search" type="search" name="search">
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>
      </div>
    </nav>

    <table>
      <thead>

        <tr>
          <th>Bild</th>
          <th>Bezeichnung</th>
          <th>Beschreibung</th>
          <th>Gewicht</th>
          <th>Kosten</th>
          <th>Anzahl</th>
        </tr>

      </thead>
      <tbody>

          <?php
          //$item is der artikel
            if (isset($_POST['search'])) {

            }else{
                foreach($pdo->query("SELECT name,kosten,beschreibung,gewicht,menge,imgsrc FROM item") AS $item){
                  echo "<tr><td><img src='../img/".$item['imgsrc']."' width='200px' height='200px'</td>";
                  echo "<td>".$item['name']."</td>";
                  echo "<td>".$item['beschreibung']."</td>";
                  echo "<td>".$item['gewicht']."</td>";
                  echo "<td>".$item['kosten']."</td>";
                  echo "<td><div class='input-field col s5'><select>"
                        ."<option value='' disabled selected>Wähle Anzahl</option>";
                  for($x=1;$x<=$item['menge'];$x++){
                    echo "<option value=".$x.">".$x."</option>";
                  }
                  echo "</select></td></tr>";
              }
            }
          ?>


      </tbody>
    </table>
    <a class="waves-effect waves-light btn-small" href="index.php?navid=1">Bestellen</a>
</div>
