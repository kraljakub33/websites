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
					<br>
					<h1>Projekt PVY Revize No.2 IT3A Jakub Král</h1>
					<p>Tak hele ... tady nic nenajdeš, ale aby sis nestěžoval, tak tady máš doggo :3
						<br>
						Vlastně najdeš ... pod obrázkem je mini anketa.
					</p>

					<span class="image main" id="middle"><img src="59c4d80b7f420.jpeg" alt="Doggo" style="max-width:75%; max-height:75%;" /></span>
					<?php
					$jmenoserveru = "localhost";
					$uzivatel = "id9655103_kubikovadeprese";
					$heslo = "yE9Gpj86";
					$databaze = "id9655103_poll";
					$spojeni = mysqli_connect($jmenoserveru, $uzivatel, $heslo, $databaze);

					$dotaz_po = "SELECT otazka, option1, option2 FROM poll";
					$vys_po = mysqli_query($spojeni, $dotaz_po);
					$po = mysqli_fetch_array($vys_po);
					?>
					<h2>Anketa</h2>
					<form action="#" method="POST">
						<?php echo $po["otazka"] . "<br>" ?>
						<br>
						<div class="col-4 col-12-small">
							<input type="radio" id="rbtn1" name="opt" value="opt1">
							<label for="rbtn1"><?php echo $po["option1"]; ?></label>
						</div>
						<div class="col-4 col-12-small">
							<input type="radio" id="rbtn2" name="opt" value="opt2">
							<label for="rbtn2"><?php echo $po["option2"]; ?></label>
						</div>
						<div class="col-12">
							<ul class="actions">
								<li><input type="submit" value="Hlasovat" class="primary" /></li>
								<li><a href="index.php?page=home2" class="button primary">Výsledky</a></li>
							</ul>
						</div>
					</form>
					<?php
					$jmenoserveru = "localhost";
					$uzivatel = "id9655103_kubikovadeprese";
					$heslo = "yE9Gpj86";
					$databaze = "id9655103_poll";
					$opt = $_POST['opt'];
					if ($opt == 'opt1') {
						$spojeni = mysqli_connect($jmenoserveru, $uzivatel, $heslo, $databaze);
						$dotaz_p = "UPDATE poll SET hlas_opt1= hlas_opt1 + 1 WHERE id_poll=1";

						if (mysqli_query($spojeni, $dotaz_p)) {
							echo "Díky za hlas.";
						}
						mysqli_close($spojeni);
					} elseif ($opt == 'opt2') {
						$spojeni = mysqli_connect($jmenoserveru, $uzivatel, $heslo, $databaze);

						$dotaz_p = "UPDATE poll SET hlas_opt2= hlas_opt2 + 1 WHERE id_poll=1";

						if (mysqli_query($spojeni, $dotaz_p)) {
							echo "Díky za hlas.";
						}
						mysqli_close($spojeni);
					}
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