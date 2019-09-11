<!DOCTYPE HTML>
<html lang="cs">

<head>
	<title>Hra - Tvorba postavy</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="HTML, CSS, webdesign, projekt, PHP, MySQL">
	<meta name="author" content="Jakub Král">
	<meta name="editor" content="VSCode">
	<link rel="stylesheet" href="style.css" />
	<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
</head>

<body class="is-preload">
	<div id="wrapper">
		<div id="main">
			<div class="inner">
				<form action="#" method="POST">
					<br>
					<h1 style="font-size: 2.5em">Vyběr postavy</h1>
					<?php
					$jmenoserveru = "localhost";
					$uzivatel = "id9655103_kubikovadeprese_game";
					$heslo = "yE9Gpj86";
					$databaze = "id9655103_game";

					$spojeni = mysqli_connect($jmenoserveru, $uzivatel, $heslo, $databaze);

					$sqlpost = "SELECT ID_postava, jmeno FROM postava";
					$vypis = mysqli_query($spojeni, $sqlpost);
					echo "<select name=id >";
					while ($radek = mysqli_fetch_assoc($vypis)) {
						echo "<option value=$radek[ID_postava]>$radek[jmeno]</option>";
					}
					echo "</select>";
					?>
					<br>
					<div class="col-12">
						<ul class="actions">
							<li><a href="index.php?page=reg" class="button primary">Tvorba postavy</a></li>
							<li><input type="submit" value="Vybrat" class="primary" /></li>
							<li><a href="index.php?page=info" class="button primary">Pokračovat</a></li>
						</ul>
					</div>
				</form>
				<?php
				$vypis1 = $_POST["id"];
				$_SESSION["idpostava"] = $vypis1;
				if (isset($vypis1)) {
					echo "Postava vybrána, můžete pokračovat";
				}
				?>
			</div>
		</div>
	</div>
</body>
<?php
include "footer.php";
?>

</html>