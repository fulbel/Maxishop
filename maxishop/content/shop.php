    <h1>Shop</h1>
    <a class="waves-effect waves-light btn-small" href="index.php?navid=9.php">Shop leeren</a>

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
              if(isset($_SESSION['items'])){
                foreach($_SESSION['items'] AS $item){
                  if($item!=null){
                  echo "<tr><td><img src='../img/".$item['img']."' width='200px' height='200px'</td>";
                  echo "<td>".$item['name']."</td>";
                  echo "<td>".$item['descr']."</td>";
                  echo "<td>".$item['weight']."</td>";
                  echo "<td>".$item['cost']."</td>";
                  echo "<td><div class='input-field col s5'><select>"
                        ."<option value='' disabled selected>Wähle Anzahl</option>";
                  for($x=1;$x<=$item['amount'];$x++){
                    echo "<option value=".$x.">".$x."</option>";
                  }
                  echo "</select></td></tr>";
                }
              }
            }
            }
          ?>


      </tbody>
    </table>
    <a class="waves-effect waves-light btn-small" href="index.php?navid=1">Bestellen</a>
</div>
