<?php
	$jmenoserveru = "localhost";
	$uzivatel = "id9655103_kubikovadeprese";
	$heslo = "yE9Gpj86";
	$databaze = "id9655103_poll";
	$spojeni = mysqli_connect($jmenoserveru, $uzivatel, $heslo, $databaze);
	if ((isset($_SESSION['odhlasovano']))) {
		if ($_SESSION['odhlasovano'] = '1') {
			$votmsg = "Už jsi hlasoval.";
		}
	}
	else {
		if (isset($_GET['vote']) && isset($_GET['opt'])) {
			$sel = $_GET['opt'];
			if ($sel == 'opt1') {
				$dotaz_opt = "UPDATE poll SET hlas_opt1 = hlas_opt1 + 1 WHERE ID_poll = 1";
				$votmsg = mysqli_query($spojeni, $dotaz_opt);
				//$_SESSION['hasVoted'] = '1';
				echo "<p>Díky za hlas!</p>";
			}
			else {
				print "Error - could not record vote";
			}
			if ($sel == 'opt2') {
				$dotaz_opt = "UPDATE poll SET hlas_opt2 = hlas_opt2 + 1 WHERE ID_poll = 1";
				$votmsg = mysqli_query($spojeni, $dotaz_opt);
				//$_SESSION['hasVoted'] = '1';W
				echo "<p>Díky za hlas!</p>";
			}
			else {
				print "Error - could not record vote";
			}	
		}
	}
?>