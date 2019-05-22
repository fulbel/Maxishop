<div class="row">
  <form class="col s12">
    <center><h1>Warenkorb</h1></center>
    <table>
      <thead>
        <tr>
          <th>Bild</th>
          <th>Name</th>
          <th>Beschreibung</th>
          <th>Gewicht</th>
          <th>Kosten</th>
          <th>Bestellte Anzahl</th>
        </tr>
      </thead>

      <tbody>
        <?php
		  if(isset($_POST['select'])){
          $warenkorb = $_POST['select'];
          $keys = array_keys($warenkorb);
          foreach ($keys AS $ware) {
            foreach ($pdo->query("SELECT name,kosten,beschreibung,gewicht,menge,imgsrc FROM item") AS $item) {
              if($ware == $item['name']){
                echo "<tr><td><img src='../img/".$item['imgsrc']."' width='200px' height='200px'</td>";
                echo "<td>".$item['name']."</td>";
                echo "<td>".$item['beschreibung']."</td>";
                echo "<td>".$item['gewicht']."</td>";
                echo "<td>".$item['kosten']."</td>";
                echo "<td>".$warenkorb[$ware]."</td>";
              }
            }
          }
        }
         ?>
      </tbody>

    </table>
    <div class="input-field col s2">
      <select>
        <option value="" disabled selected>Wähle Zahlungsmethode</option>
        <option value="1">PayPal</option>
        <option value="2">Kreditkarte</option>
        <option value="3">Tauschhandel</option>
      </select>
    </div>
    <br><br><br><br><a class="waves-effect waves-light btn-small" href="index.php?navid=2">Kaufen</a>
  </form>
</div>
