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
                    <h1 style="font-size: 2.5em">Tvorba postavy</h1>
                    <div class="field half">
                        <br>
                        Jméno:<input type="text" name="name" />
                    </div>
                    <br>
                    <div class="col-4 col-12-small">
                        <p>Pohlaví:</p>
                        <input type="radio" id="rbtn1" name="gender" value="1">
                        <label for="rbtn1">Muž</label>
                        <input type="radio" id="rbtn2" name="gender" value="2">
                        <label for="rbtn2">Žena</label>
                    </div>
                    <br>
                    <div class="col-4 col-12-small">
                        <p>Povolání:</p>
                        <input type="radio" id="rbtn3" name="rasa" value="1">
                        <label for="rbtn3">Trpaslík</label>
                        <input type="radio" id="rbtn4" name="rasa" value="2">
                        <label for="rbtn4">Člověk</label>
                        <input type="radio" id="rbtn5" name="rasa" value="3">
                        <label for="rbtn5">Elf</label>
                    </div>
                    <br>
                    <div class="col-4 col-12-small">
                        <p>Rasa:</p>
                        <input type="radio" id="rbtn6" name="class" value="1">
                        <label for="rbtn6">Rytíř</label>
                        <input type="radio" id="rbtn7" name="class" value="2">
                        <label for="rbtn7">Lučištník</label>
                        <input type="radio" id="rbtn8" name="class" value="3">
                        <label for="rbtn8">Mág</label>
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Vytvořit" class="primary" /></li>
                            <li><a href="index.php?page=vyber" class="button primary">Zpět</a></li>
                        </ul>
                    </div>
                </form>
                <?php
                $jmenoserveru = "localhost";
                $uzivatel = "id9655103_kubikovadeprese_game";
                $heslo = "yE9Gpj86";
                $databaze = "id9655103_game";

                $spojeni = mysqli_connect($jmenoserveru, $uzivatel, $heslo, $databaze);

                $race = $_POST["rasa"];
                $class = $_POST["class"];
                $gender = $_POST["gender"];
                $name = $_POST["name"];
                $sqlmod1 = "SELECT vit_mod, str_mod FROM povolani WHERE ID_povolani = $class";
                $sqlmod2 = "SELECT agi_mod FROM rasa WHERE ID_rasa = $race";
                $sqlmod3 = "SELECT agig_mod, strg_mod FROM pohlavi WHERE ID_pohlavi =  $gender";
                $sqltest = 'SELECT ID_postava FROM postava WHERE jmeno = "' . $name . '"';

                $mod1 = mysqli_query($spojeni, $sqlmod1);
                $mod2 = mysqli_query($spojeni, $sqlmod2);
                $mod3 = mysqli_query($spojeni, $sqlmod3);
                $testn = mysqli_query($spojeni, $sqltest);

                $mod1p = mysqli_fetch_array($mod1);
                $mod2p = mysqli_fetch_array($mod2);
                $mod3p = mysqli_fetch_array($mod3);


                if ($mod1p["vit_mod"] == 1) {
                    $vitr = mt_rand(6, 10);
                } elseif ($mod1p["vit_mod"] == 2) {
                    $vitr = mt_rand(3, 7);
                } elseif ($mod1p["vit_mod"] == 3) {
                    $vitr = mt_rand(1, 5);
                }

                if ($mod1p["str_mod"] == 2) {
                    $strr = mt_rand(1, 10);
                } elseif ($mod1p["str_mod"] == 1) {
                    $strr = mt_rand(3, 7);
                } elseif ($mod1p["str_mod"] == 3) {
                    $strr = mt_rand(6, 10);
                }

                if ($mod2p["agi_mod"] == 3) {
                    $agitr = mt_rand(1, 5);
                } elseif ($mod2p["agi_mod"] == 2) {
                    $agitr = mt_rand(3, 7);
                } elseif ($mod2p["agi_mod"] == 1) {
                    $agitr = mt_rand(6, 10);
                }

                if ($mod3p["agig_mod"] == 1 && $agitr <= 10 && $agitr > 1) {
                    $agitr = $agitr - 1;
                } elseif ($mod3p["agig_mod"] == 2 && $agitr < 10) {
                    $agitr = $agitr + 1;
                }

                if ($mod3p["strg_mod"] == 1 && $strr < 10) {
                    $strr = $strr + 1;
                } elseif ($mod3p["strg_mod"] == 2 && $strr <= 10 && $strr > 1) {
                    $strr = $strr + 1;
                }

                switch ($vitr) {
                    case "1":
                        $healthe = mt_rand(500, 800);
                        break;
                    case "2":
                        $healthe = mt_rand(650, 950);
                        break;
                    case "3":
                        $healthe = mt_rand(800, 1100);
                        break;
                    case "4":
                        $healthe = mt_rand(950, 1250);
                        break;
                    case "5":
                        $healthe = mt_rand(1100, 1400);
                        break;
                    case "6":
                        $healthe = mt_rand(1250, 1550);
                        break;
                    case "7":
                        $healthe = mt_rand(1400, 1700);
                        break;
                    case "8":
                        $healthe = mt_rand(1550, 1850);
                        break;
                    case "9":
                        $healthe = mt_rand(1700, 2000);
                        break;
                    case "10":
                        $healthe = mt_rand(1850, 2150);
                        break;
                    default:
                        $healthe = 0;
                        break;
                }

                if (mysqli_num_rows($testn) == 0) {
                    $sql_tvorba = 'INSERT INTO postava (jmeno, ID_pohlavi, ID_rasa, ID_povolani, stre, agil, vit, zdravi, win, lose)
                        VALUES ("' . $name . '" , "' . $gender . '" , "' . $race . '" , "' . $class . '", "' . $strr . '", "' . $agitr . '", "' . $vitr . '", "' . $healthe . '", 0, 0)';
                    if (mysqli_query($spojeni, $sql_tvorba)) {
                        echo "Postava úspěšně vytvořena.";
                    }
                } else {
                    echo "Jméno již existuje.";
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