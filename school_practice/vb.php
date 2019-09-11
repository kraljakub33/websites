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
            <h4><a href="http://dchk.tmep.cz/" style="color:green">DC Hradec Králové sklad</a></h4>
            <p>
               <?php

               // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

               // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
               $urlSVystupem = "";

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
            <h4><a href="http://dcvb1.tmep.cz/" style="color:green">DC Velké Březno sklad 1</a></h4>
            <p>
               <?php

               // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

               // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
               $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1685&export_key=e9jmwi4ofp";

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
            <h4><a href="http://dcvb2.tmep.cz/" style="color:green">DC Velké Březno sklad 2</a></h4>
            <p>
               <?php

               // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

               // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
               $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1686&export_key=rdnkch3xqm";

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
            <h4><a href="http://dcvb3.tmep.cz/" style="color:green">DC Velké Březno sklad KEG</a></h4>
            <p>
               <?php

               // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

               // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
               $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1687&export_key=uyni42xad8";

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