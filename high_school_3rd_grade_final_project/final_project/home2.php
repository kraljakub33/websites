<!DOCTYPE HTML>
<html lang="cs">

<head>
	<title>Kubíkův projekt</title>
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
				<header>
					<h1>Projekt PVY Revize No.2 IT3A Jakub Král</h1>
					<p>Tak hele ... tady nic nenajdeš, ale aby sis nestěžoval, tak tady máš doggo :3
						<br>
						Vlastně najdeš ... pod obrázkem je mini anketa.
					</p>
					<span class="image main" id="middle"><img src="59c4d80b7f420.jpeg" alt="Doggo" style="max-width:75%; max-height:75%;" /></span>
					<h2>Výsledky ankety</h2>
					<?php
					$jmenoserveru = "localhost";
					$uzivatel = "id9655103_kubikovadeprese";
					$heslo = "yE9Gpj86";
					$databaze = "id9655103_poll";

					$dotaz1 = "SELECT otazka, option1, option2 FROM poll";
					$dotaz2 = "SELECT hlas_opt1, hlas_opt2 FROM poll";
					$spojeni = mysqli_connect($jmenoserveru, $uzivatel, $heslo, $databaze);
					$vys1 = mysqli_query($spojeni, $dotaz1);
					$vys2 = mysqli_query($spojeni, $dotaz2);
					$po = mysqli_fetch_assoc($vys1);
					if (mysqli_num_rows($vys2) == 1) {
						while ($row = mysqli_fetch_assoc($vys2)) {
							$hopt1 = $row["hlas_opt1"];
							$hopt2 = $row["hlas_opt2"];
						}
					}
					$hopc = $hopt1 + $hopt2;
					$proc1 = ($hopt1 / $hopc) * 100;
					$proc2 = ($hopt2 / $hopc) * 100;

					echo $po["otazka"] . "<br>";
					echo $po["option1"] . ": $hopt1/$hopc = " . round($proc1) . "%<br>";
					echo $po["option2"] . ": $hopt2/$hopc = " . round($proc2) . "%";
					?>
				</header>
			</div>
		</div>
	</div>
</body>
<?php
include "footer.php";
?>

</html>