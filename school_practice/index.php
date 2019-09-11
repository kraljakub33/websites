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
            <h4><a href="http://kpkh11.tmep.cz/" style="color:green">Krušovice hala 1 čidlo 1</a></h4>
            <p>
               <?php

               // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

               // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
               $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1688&export_key=5kntoqz03e";

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
         <h4><a href="http://kpkh12.tmep.cz/" style="color:green">Krušovice hala 1 čidlo 2</a></h4>
            <p>
               <?php

               // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

               // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
               $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1689&export_key=9gjdkeqmv6";

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
            <h4><a href="http://kpkh1e.tmep.cz/" style="color:green">Krušovice hala 1 sklad etiket</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1690&export_key=wmupjq4iyd";

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
            <h4><a href="http://kpkh21.tmep.cz/" style="color:green">Krušovice hala 2 čidlo 1</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1691&export_key=j0wq8rcnis";

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
         <h4><a href="http://kpkh22.tmep.cz/" style="color:green">Krušovice hala 2 čidlo 2</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1692&export_key=w7j5a8o3d2";

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
         <h4><a href="http://kpkst.tmep.cz/" style="color:green">Krušovice venkovní stan</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1693&export_key=6420ak8hft";

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
         <h4><a href="http://kpkmtz.tmep.cz/" style="color:green">Krušovice sklad MTZ</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1694&export_key=q8z9s1gfb6";

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
         <h4><a href="http://kpksm.tmep.cz/" style="color:green">Krušovice sklad Mařík</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1695&export_key=na34z76kse";

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
         <h4><a href="http://kpkckt.tmep.cz/" style="color:green">Krušovice sklad CKT</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1696&export_key=azkduobfi3";

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
         <h4><a href="http://dcl1.tmep.cz/" style="color:green">DC Louny sklad lahve</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1697&export_key=okvlny34bi";

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
         <h4><a href="http://dcl2.tmep.cz/" style="color:green">DC Louny sklad KEG 1</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1698&export_key=7m53wkyl8s";

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
         <h4><a href="http://dcl3.tmep.cz/" style="color:green">DC Louny sklad KEG 2</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1699&export_key=yzkq3t7s54";

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
         <h4><a href="http://dcl4.tmep.cz/" style="color:green">DC Louny sklad KEG 3 celnice</a></h4>
            <p> <?php

                  // Příklad zaslal Jiří Vlasák, jiri.vlasak@hafnet.cz

                  // URL získáte po přihlášení se na tmep.cz v možnostech u čidla pod "Export posledního měření"
                  $urlSVystupem = "https://tmep.cz/vystup-json.php?id=1700&export_key=065uv4knje";

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