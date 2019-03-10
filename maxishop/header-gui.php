  <!DOCTYPE html>
  <html>
    <head>
    <title>ArrayShop</title>
    <!-- Compiled and minified CSS -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  	<script type="text/javascript">
  	$(document).ready(function(){
      $('select').formSelect();
  	});
  	$(document).ready(function(){
      $('.datepicker').datepicker();
  	});
    $(document).ready(function() {
      M.updateTextFields();
    });
    $(document).ready(function() {
      $(".dropdown-trigger").dropdown();
    });
  	</script>



    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <nav>
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="index.php?navid=0">Shop</a></li>
          <li class="divider"></li>
          <li><a href="index.php?navid=3">Artikel hinzufügen</a></li>
          <li><a href="index.php?navid=10">Artikel bearbeiten</a></li>
          <li><a href="index.php?navid=7">Artikel entfernen</a></li>
        </ul>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo center">Willkommen im ArrayShop<?php
          if(isset($_SESSION['a_user'])){
            echo ", " . $_SESSION['a_user'];
            $ausgabe = '<a href="index.php?navid=13">Abmelden</a>';
          }else{
            $ausgabe = '<a href="index.php?navid=4">Anmelden</a>';
          }
          ?>!</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Shop<i class="material-icons right">arrow_drop_down</i></a></li>
            <!--<li class="tab"><a href="index.php?navid=0">Shop</a></li>-->

            <li class="tab"><a href="index.php?navid=1">Warenkorb</a></li>
          </ul>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><?php echo $ausgabe; ?></li>
            <li><a href="index.php?navid=5">Registrieren</a></li>
          </ul>
        </div>
      </nav>
