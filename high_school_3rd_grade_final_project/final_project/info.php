<!DOCTYPE HTML>
<html lang="cs">

<head>
	<title>Hra - Info o postavě</title>
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
				<div class="table-wrapper">
					<?php
					$jmenoserveru = "localhost";
					$uzivatel = "id9655103_kubikovadeprese_game";
					$heslo = "yE9Gpj86";
					$databaze = "id9655103_game";

					$spojeni = mysqli_connect($jmenoserveru, $uzivatel, $heslo, $databaze);
					$ID = $_SESSION["idpostava"];

					$sqldotaz1 = "SELECT * FROM postava WHERE ID_postava = $ID";
					$sqldotaz2 = "SELECT pohlavi.popis, pohlavi.jmeno FROM pohlavi INNER JOIN postava ON postava.ID_pohlavi = pohlavi.ID_pohlavi WHERE ID_postava = $ID";
					$sqldotaz3 = "SELECT rasa.popis, rasa.jmeno FROM rasa INNER JOIN postava ON postava.ID_rasa = rasa.ID_rasa WHERE ID_postava = $ID";
					$sqldotaz4 = "SELECT povolani.popis, povolani.jmeno FROM povolani INNER JOIN postava ON postava.ID_povolani = povolani.ID_povolani WHERE ID_postava = $ID";

					$vys_pr1 = mysqli_query($spojeni, $sqldotaz1);
					$vys_pr2 = mysqli_query($spojeni, $sqldotaz2);
					$vys_pr3 = mysqli_query($spojeni, $sqldotaz3);
					$vys_pr4 = mysqli_query($spojeni, $sqldotaz4);

					$vys1 = mysqli_fetch_array($vys_pr1);
					$vys2 = mysqli_fetch_array($vys_pr2);
					$vys3 = mysqli_fetch_array($vys_pr3);
					$vys4 = mysqli_fetch_array($vys_pr4);

					$utokia = $vys1["stre"];
					$sanca = $vys1["agil"];
					$sanc = 0;
					$utoki = 0;

					switch ($sanca) {
						case "1":
							$sanc = 5;
							break;
						case "2":
							$sanc = 10;
							break;
						case "3":
							$sanc = 15;
							break;
						case "4":
							$sanc = 20;
							break;
						case "5":
							$sanc = 25;
							break;
						case "6":
							$sanc = 30;
							break;
						case "7":
							$sanc = 35;
							break;
						case "8":
							$sanc = 40;
							break;
						case "9":
							$sanc = 45;
							break;
						case "10":
							$sanc = 50;
							break;
						default:
							$sanc = 0;
							break;
					}

					switch ($utokia) {
						case "1":
							$utoki = "25-75";
							$utoki1 = 25;
							$utoki2 = 75;
							break;
						case "2":
							$utoki = "50-100";
							$utoki1 = 50;
							$utoki2 = 100;
							break;
						case "3":
							$utoki = "75-125";
							$utoki1 = 75;
							$utoki2 = 125;
							break;
						case "4":
							$utoki = "100-150";
							$utoki1 = 100;
							$utoki2 = 150;
							break;
						case "5":
							$utoki = "125-175";
							$utoki1 = 125;
							$utoki2 = 175;
							break;
						case "6":
							$utoki = "150-200";
							$utoki1 = 150;
							$utoki2 = 200;
							break;
						case "7":
							$utoki = "175-225";
							$utoki1 = 175;
							$utoki2 = 225;
							break;
						case "8":
							$utoki = "200-250";
							$utoki1 = 200;
							$utoki2 = 250;
							break;
						case "9":
							$utoki = "225-275";
							$utoki1 = 225;
							$utoki2 = 275;
							break;
						case "10":
							$utoki = "250-300";
							$utoki1 = 250;
							$utoki2 = 300;
							break;
						default:
							$utoki = 0;
							$utoki1 = 0;
							$utoki2 = 0;
							break;
					}
					$_SESSION["sance"] = $sanc;
					$_SESSION["utok1"] = $utoki1;
					$_SESSION["utok2"] = $utoki2;
					$_SESSION["health"] = $vys1["zdravi"];

					?>
					<table class="alt">
						<thead>
							<tr>
								<th style="font-size: 1.25em"><?php echo $vys1["jmeno"]; ?></th>
								<th>Popis</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $vys2["jmeno"]; ?></td>
								<td><?php echo $vys2["popis"]; ?></td>
							</tr>
							<tr>
								<td><?php echo $vys3["jmeno"]; ?></td>
								<td><?php echo $vys3["popis"]; ?></td>
							</tr>
							<tr>
								<td><?php echo $vys4["jmeno"]; ?></td>
								<td><?php echo $vys4["popis"]; ?></td>
							</tr>
							<tr>
								<td>Výhry</td>
								<td><?php echo $vys1["win"]; ?></td>
							</tr>
							<tr>
								<td>Prohry</td>
								<td><?php echo $vys1["lose"]; ?></td>
							</tr>
						</tbody>
					</table>
					<table class="alt">
						<thead>
							<tr>
								<th>Staty</th>
								<th>Hodnota</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Síla</td>
								<td><?php echo $vys1["stre"] . " - poškození (" . $utoki . ")"; ?></td>
							</tr>
							<tr>
								<td>Agilita</td>
								<td><?php echo $vys1["agil"] . " - šance na úhyb " . $sanc . "%"; ?></td>
							</tr>
							<tr>
								<td>Vitalita</td>
								<td><?php echo $vys1["vit"] . " - " . $vys1["zdravi"] . "HP"; ?></td>
							</tr>
						</tbody>
					</table>
					<div class="col-12">
						<ul class="actions">
							<li><a href="index.php?page=game" class="button primary">Do boje!</a></li>
							<li><a href="index.php?page=vyber" class="button primary">Zpět</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php
include "footer.php";
?>

</html>