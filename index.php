<!DOCTYPE html>
<html manifest="pokemon.appcache">
<head>
  <meta charset="UTF-8">
  <link href="stylesheet.css" rel="stylesheet"/>
  <script src="js/jquery-3.1.1.min.js" charset="utf-8"></script>
  <script src="js/javascript.js"></script>
  <title>Poké Api</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
  <nav>
  <ul>
    <img id="logo" src="img/logo.png">
    <li>
      <a href='?page=home'/><i class="fa fa-home"></i> Index</a>
    </li>
    <li>
      <a href='?page=pokemon'><i class="fa fa-th"></i> Pokémon</a>
    </li>
    <div id="zoeken">
      <input type="text" onKeyDown="buttonEnter();" id="tbxID" name="tbxID" placeholder="Zoek Pokémon..."/>
      <input type="button" onclick="searchPokemonquery();" id="btnID" name="button" value="Zoek"/>
      <aside class="loadHolder" id="loadingSpinner">
        <img class="loader" src="https://d13yacurqjgara.cloudfront.net/users/82092/screenshots/1073359/spinner.gif" />
      </aside>
    </div>
  </nav>
  <div id="empty">
  </div>
<section>
  <?php

	if(isset($_GET['page']))
	{
		$page = $_GET['page'];
		switch($page)
		{
			case 'home': include("home.php");
						break;
			case 'pokemon': include("pokemon.php");
						break;
		}

	}
  else {
    include("home.php");
  }

	?>
</section>
<footer>
</footer>
</body>

</html>
