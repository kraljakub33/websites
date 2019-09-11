<!DOCTYPE html>
<html lang="en-US">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Teploměry Heineken</title>
   <link rel="stylesheet" href="css/components.css">
   <link rel="stylesheet" href="css/responsee.css">
   <!-- CUSTOM STYLE -->
   <link rel="stylesheet" href="css/template-style.css">
</head>

<body class="size-1140">
   <!-- HEADER -->
   <header class="grid">
      <!-- Top Navigation -->
      <nav class="s-12 grid margin-bottom">
         <div class="top-nav s-12 l-9">
            <ul class="top-ul right chevron">
               <li><a href="index.php">Krušovice</a></li>
               <li><a href="starobrno.php">Starobrno</a></li>
               <li><a href="vb.php">Velké Březno</a></li>
               <li><a href="dc.php">Distribuční centra</a></li>
            </ul>
         </div>
      </nav>
   </header>

   <!-- MAIN -->
   <main role="main">

      <!-- SECTION 1 -->
      <section class="grid margin">
         <div class="s-12 l-4 box margin-bottom">
            <h4><a href="http://dct.tmep.cz/" style="color:green">DC Těšětice sklad</a></h4>
            <p>
               <?php

               // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

               // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
               $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1582&export_key=zhng17kqi2";

               $json = file_get_contents($urlSVystupem);
               $obj = json_decode($json);

               // Konkrétní hodnoty ze získaného:

               print "<p style='font-size: 20px'><b>Teplota: </b>" . $obj->teplota . " °C</p><br />";
               print "<p style='font-size: 20px'><b>Vlhkost: </b>" . $obj->vlhkost . " %</p><br />";
               print "<p style='font-size: 20px'><b>Čas: </b>" . $obj->cas . "</p><br />";

               // Zavolej index.php s očekavanými parametry - zaokrouhleno na 1 desetinne misto
               if (is_numeric($obj->teplota)) {
                  $urlKam = 'localhost/testsite/test.php?temp=' . round($obj->teplota, 1);

                  if (is_numeric($obj->vlhkost)) {

                     $urlKam .= "&and;humV=" . round($obj->vlhkost);
                  }
               }
               ?>
            </p>
         </div>
         <div class="s-12 l-4 box margin-bottom">
         <h4><a href="http://dck.tmep.cz/" style="color:green">DC Kunovice</a></h4>
            <p>
               <?php

               // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

               // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
               $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1583&export_key=6cjz8p3yol";

               $json = file_get_contents($urlSVystupem);
               $obj = json_decode($json);

               // Konkrétní hodnoty ze získaného:

               print "<p style='font-size: 20px'><b>Teplota: </b>" . $obj->teplota . " °C</p><br />";
               print "<p style='font-size: 20px'><b>Vlhkost: </b>" . $obj->vlhkost . " %</p><br />";
               print "<p style='font-size: 20px'><b>Čas: </b>" . $obj->cas . "</p><br />";

               // Zavolej index.php s očekavanými parametry - zaokrouhleno na 1 desetinne misto
               if (is_numeric($obj->teplota)) {
                  $urlKam = 'localhost/testsite/test.php?temp=' . round($obj->teplota, 1);

                  if (is_numeric($obj->vlhkost)) {

                     $urlKam .= "&and;humV=" . round($obj->vlhkost);
                  }
               }
               ?>
            </p>
         </div>
         <div class="s-12 l-4 box margin-bottom">
            <h4><a href="http://cac.tmep.cz/" style="color:green">C&C Malá Amerika sklad</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1614&export_key=r7n8hslpg5";

                  $json = file_get_contents($urlSVystupem);
                  $obj = json_decode($json);

                  // Konkrétní hodnoty ze získaného:

                  print "<p style='font-size: 20px'><b>Teplota: </b>" . $obj->teplota . " °C</p><br />";
                  print "<p style='font-size: 20px'><b>Vlhkost: </b>" . $obj->vlhkost . " %</p><br />";
                  print "<p style='font-size: 20px'><b>Čas: </b>" . $obj->cas . "</p><br />";

                  // Zavolej index.php s očekavanými parametry - zaokrouhleno na 1 desetinne misto
                  if (is_numeric($obj->teplota)) {
                     $urlKam = 'localhost/testsite/test.php?temp=' . round($obj->teplota, 1);

                     if (is_numeric($obj->vlhkost)) {

                        $urlKam .= "&and;humV=" . round($obj->vlhkost);
                     }
                  }
                  ?>
            </p>
         </div>
         <div class="s-12 l-4 box margin-bottom">
            <h4><a href="http://dcbs1.tmep.cz/" style="color:green">DC Brno stan 1</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1619&export_key=kiomyn3ch0";

                  $json = file_get_contents($urlSVystupem);
                  $obj = json_decode($json);

                  // Konkrétní hodnoty ze získaného:

                  print "<p style='font-size: 20px'><b>Teplota: </b>" . $obj->teplota . " °C</p><br />";
                  print "<p style='font-size: 20px'><b>Vlhkost: </b>" . $obj->vlhkost . " %</p><br />";
                  print "<p style='font-size: 20px'><b>Čas: </b>" . $obj->cas . "</p><br />";

                  // Zavolej index.php s očekavanými parametry - zaokrouhleno na 1 desetinne misto
                  if (is_numeric($obj->teplota)) {
                     $urlKam = 'localhost/testsite/test.php?temp=' . round($obj->teplota, 1);

                     if (is_numeric($obj->vlhkost)) {

                        $urlKam .= "&and;humV=" . round($obj->vlhkost);
                     }
                  }
                  ?>
            </p>
         </div>
         <div class="s-12 l-4 box margin-bottom">
         <h4><a href="http://dcbs2.tmep.cz/" style="color:green">DC Brno stan 2</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1620&export_key=u8jchima16";

                  $json = file_get_contents($urlSVystupem);
                  $obj = json_decode($json);

                  // Konkrétní hodnoty ze získaného:

                  print "<p style='font-size: 20px'><b>Teplota: </b>" . $obj->teplota . " °C</p><br />";
                  print "<p style='font-size: 20px'><b>Vlhkost: </b>" . $obj->vlhkost . " %</p><br />";
                  print "<p style='font-size: 20px'><b>Čas: </b>" . $obj->cas . "</p><br />";

                  // Zavolej index.php s očekavanými parametry - zaokrouhleno na 1 desetinne misto
                  if (is_numeric($obj->teplota)) {
                     $urlKam = 'localhost/testsite/test.php?temp=' . round($obj->teplota, 1);

                     if (is_numeric($obj->vlhkost)) {

                        $urlKam .= "&and;humV=" . round($obj->vlhkost);
                     }
                  }
                  ?>
            </p>
         </div>
         <div class="s-12 l-4 box margin-bottom">
         <h4><a href="http://dcbsm.tmep.cz/" style="color:green">DC Brno sklad materiálu</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1618&export_key=zdacl48wvx";

                  $json = file_get_contents($urlSVystupem);
                  $obj = json_decode($json);

                  // Konkrétní hodnoty ze získaného:

                  print "<p style='font-size: 20px'><b>Teplota: </b>" . $obj->teplota . " °C</p><br />";
                  print "<p style='font-size: 20px'><b>Vlhkost: </b>" . $obj->vlhkost . " %</p><br />";
                  print "<p style='font-size: 20px'><b>Čas: </b>" . $obj->cas . "</p><br />";

                  // Zavolej index.php s očekavanými parametry - zaokrouhleno na 1 desetinne misto
                  if (is_numeric($obj->teplota)) {
                     $urlKam = 'localhost/testsite/test.php?temp=' . round($obj->teplota, 1);

                     if (is_numeric($obj->vlhkost)) {

                        $urlKam .= "&and;humV=" . round($obj->vlhkost);
                     }
                  }
                  ?>
            </p>
         </div>
         <div class="s-12 l-4 box margin-bottom">
         <h4><a href="http://heineken.tmep.cz/" style="color:green">DC Brno sklad produktů 1</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=211&export_key=elxm8kdny5";

                  $json = file_get_contents($urlSVystupem);
                  $obj = json_decode($json);

                  // Konkrétní hodnoty ze získaného:

                  print "<p style='font-size: 20px'><b>Teplota: </b>" . $obj->teplota . " °C</p><br />";
                  print "<p style='font-size: 20px'><b>Vlhkost: </b>" . $obj->vlhkost . " %</p><br />";
                  print "<p style='font-size: 20px'><b>Čas: </b>" . $obj->cas . "</p><br />";

                  // Zavolej index.php s očekavanými parametry - zaokrouhleno na 1 desetinne misto
                  if (is_numeric($obj->teplota)) {
                     $urlKam = 'localhost/testsite/test.php?temp=' . round($obj->teplota, 1);

                     if (is_numeric($obj->vlhkost)) {

                        $urlKam .= "&and;humV=" . round($obj->vlhkost);
                     }
                  }
                  ?>
            </p>
         </div>
         <div class="s-12 l-4 box margin-bottom">
         <h4><a href="http://heineken1.tmep.cz/" style="color:green">DC Brno sklad produktů 2</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=220&export_key=u9km2aecn1";

                  $json = file_get_contents($urlSVystupem);
                  $obj = json_decode($json);

                  // Konkrétní hodnoty ze získaného:

                  print "<p style='font-size: 20px'><b>Teplota: </b>" . $obj->teplota . " °C</p><br />";
                  print "<p style='font-size: 20px'><b>Vlhkost: </b>" . $obj->vlhkost . " %</p><br />";
                  print "<p style='font-size: 20px'><b>Čas: </b>" . $obj->cas . "</p><br />";

                  // Zavolej index.php s očekavanými parametry - zaokrouhleno na 1 desetinne misto
                  if (is_numeric($obj->teplota)) {
                     $urlKam = 'localhost/testsite/test.php?temp=' . round($obj->teplota, 1);

                     if (is_numeric($obj->vlhkost)) {

                        $urlKam .= "&and;humV=" . round($obj->vlhkost);
                     }
                  }
                  ?>
            </p>
         </div>
         
      </section>

   </main>


   <!-- FOOTER -->
   <footer class="grid box">
      <div class="s-12 text-center margin-bottom">
         <p>Copyright 2019, Vision Design - graphic zoo</p>
         <p><a href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a></p>
         <p>Modified by Jakub Král</p>
      </div>
   </footer>
</body>

</html>