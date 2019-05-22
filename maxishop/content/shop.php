<center><h1>Shop</h1></center>
    <!--<a class="waves-effect waves-light btn-small" href="index.php?navid=9.php">Shop leeren</a>!-->
<?php
//$edititem -> execute(array('1', '1', '1', '1', '1', '1', 'Minecraft'));
//echo print_r($_POST);
?>
<a class="waves-effect waves-light btn-small" href="index.php?navid=9.php">Shop leeren</a>

<nav class="teal">
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
<form method="post" action="index.php?navid=1">
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
            if (isset($_POST['search']) AND $_POST['search']!='') {
              foreach($pdo->query("SELECT name,kosten,beschreibung,gewicht,menge,imgsrc FROM item") AS $item){
                //echo $_POST['search'];
                if($item!=null AND $item['name']==$_POST['search']){
                  echo "<tr><td><img src='../img/".$item['imgsrc']."' width='200px' height='200px'</td>";
                  echo "<td>".$item['name']."</td>";
                  echo "<td>".$item['beschreibung']."</td>";
                  echo "<td>".$item['gewicht']."</td>";
                  echo "<td>".$item['kosten']."</td>";
                  echo "<td><div class='input-field col s5'><select name='select[]'>"
                        ."<option value='' disabled selected>Wähle Anzahl</option>";
                  for($x=1;$x<=$item['menge'];$x++){
                    echo "<option value=".$x.">".$x."</option>";
                  }
                  echo "</select></td></tr>";
                }
              }
            }else{
                foreach($pdo->query("SELECT name,kosten,beschreibung,gewicht,menge,imgsrc FROM item") AS $item){
                  echo "<tr><td><img src='../img/".$item['imgsrc']."' width='200px' height='200px'</td>";
                  echo "<td>".$item['name']."</td>";
                  echo "<td>".$item['beschreibung']."</td>";
                  echo "<td>".$item['gewicht']."</td>";
                  echo "<td>".$item['kosten']."</td>";
                  echo "<td><div class='input-field col s5'><select name='select[$item[name]]'>"
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
    <button class="btn waves-effect waves-light" type="submit" name="action">BESTELLEN<i class="material-icons right">send</i></button>
  </form>
</div>
