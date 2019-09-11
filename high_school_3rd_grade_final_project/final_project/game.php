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
				<?php
				function vyhra()
				{
					$jmenoserveru = "localhost";
					$uzivatel = "id9655103_kubikovadeprese_game";
					$heslo = "yE9Gpj86";
					$databaze = "id9655103_game";
					$IDp = $_SESSION["idpostava"];

					$spojeni = mysqli_connect($jmenoserveru, $uzivatel, $heslo, $databaze);
					$dotaz = "UPDATE postava SET win = win + 1 WHERE ID_postava = $IDp";
					if (mysqli_query($spojeni, $dotaz)) {
						echo "Vyhrál jsi. Gratuluji!";
					}
				}
				function prohra()
				{
					$jmenoserveru = "localhost";
					$uzivatel = "id9655103_kubikovadeprese_game";
					$heslo = "yE9Gpj86";
					$databaze = "id9655103_game";
					$IDp = $_SESSION["idpostava"];

					$spojeni = mysqli_connect($jmenoserveru, $uzivatel, $heslo, $databaze);
					$dotaz = "UPDATE postava SET lose = lose + 1 WHERE ID_postava = $IDp";
					if (mysqli_query($spojeni, $dotaz)) {
						echo "Prohrál jsi.";
					}
				}

				$agie = mt_rand(1, 10);
				$stree = mt_rand(1, 10);
				$healthe = mt_rand(500, 2150);
				$healthp = $_SESSION["health"];
				$utokp1 = $_SESSION["utok1"];
				$utokp2 = $_SESSION["utok2"];
				$sanct = $_SESSION["sance"];

				switch ($agie) {
					case "1":
						$sancee = 5;
						break;
					case "2":
						$sancee = 10;
						break;
					case "3":
						$sancee = 15;
						break;
					case "4":
						$sancee = 20;
						break;
					case "5":
						$sancee = 25;
						break;
					case "6":
						$sancee = 30;
						break;
					case "7":
						$sancee = 35;
						break;
					case "8":
						$sancee = 40;
						break;
					case "9":
						$sancee = 45;
						break;
					case "10":
						$sancee = 50;
						break;
					default:
						$sancee = 0;
						break;
				}

				switch ($stree) {
					case "1":
						$utoke1 = 25;
						$utoke2 = 75;
						$utokei = "25-75";
						break;
					case "2":
						$utoke1 = 50;
						$utoke2 = 100;
						$utokei = "50-100";
						break;
					case "3":
						$utoke1 = 75;
						$utoke2 = 125;
						$utokei = "75-125";
						break;
					case "4":
						$utoke1 = 100;
						$utoke2 = 150;
						$utokei = "100-150";
						break;
					case "5":
						$utoke1 = 125;
						$utoke2 = 175;
						$utokei = "125-175";
						break;
					case "6":
						$utoke1 = 150;
						$utoke2 = 200;
						$utokei = "150-200";
						break;
					case "7":
						$utoke1 = 175;
						$utoke2 = 225;
						$utokei = "175-225";
						break;
					case "8":
						$utoke1 = 200;
						$utoke2 = 250;
						$utokei = "200-250";
						break;
					case "9":
						$utoke1 = 225;
						$utoke2 = 275;
						$utokei = "225-275";
						break;
					case "10":
						$utoke1 = 250;
						$utoke2 = 300;
						$utokei = "250-300";
						break;
					default:
						$utoke = 0;
						$utokei = " ";
						$utoke1 = 0;
						$utoke2 = 0;
						break;
				}
				?>
				<div class="table-wrapper">
					<table class="alt">
						<thead>
							<tr>
								<th>Staty nepřítele</th>
								<th>Hodnota</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Útok</td>
								<td><?php echo $utokei ?></td>
							</tr>
							<tr>
								<td>Šance na úhyb</td>
								<td><?php echo $sancee . "%" ?></td>
							</tr>
							<tr>
								<td>Počet zdraví</td>
								<td><?php echo $healthe . " HP" ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<form action="#" method="POST">
					<div class="col-12">
						<ul class="actions">
							<li><input type="submit" value="Další souboj!" class="primary" /></li>
							<li><a href="index.php?page=info" class="button primary">Zpět</a></li>
						</ul>
					</div>
				</form>
				<?php
				while (($healthp > 0) && ($healthe > 0)) {
					if (mt_rand(1, 100) > $sancee) {
						$damage = round(mt_rand($utokp1, $utokp2));
						$healthe = $healthe - $damage;
						echo "Udeřil jsi nepřítele za " . $damage . ". Nepříteli zbývá " . $healthe . " HP.";
						echo "<br>";
					} else {
						echo "Nepřítel se vyhnul tvému útoku!";
						echo "<br>";
					}
					if (mt_rand(1, 100) > $sanct) {
						$damagee = round(mt_rand($utoke1, $utoke2));
						$healthp = $healthp - $damagee;
						echo "Nepřítel tě udeřil za " . $damagee . ". Zbývá ti " . $healthp . " HP.";
						echo "<br>";
					} else {
						echo "Vyhnul jsi se útoku nepřítele!";
						echo "<br>";
					}
				}
				if (isset($healthe)) {
					if ($healthp >= 1) {
						vyhra();
					} else {
						prohra();
					}
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