<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Part1 - Exo6</title>
  </head>
  <body>
    <h1>Part1 - Exo6</h1>
    <?php
    $richter = rand(1, 9);
    echo 'Magnitude enregistrer: ', $richter, '<br>';
    switch ($richter) {
        case 1:
            echo("Micro-séisme impossible à ressentir.");
            // foreach($a as $b) {
            //     echo "ok";
            // }
            break;
        case 2:
            echo("Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.");
            break;
        case 3:
            echo("Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.");
            break;
        case 4:
            echo("Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.");
            break;
        case 5:
            echo("Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.");
            break;
        case 6:
            echo("Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.");
            break;
        case 7:
            echo("Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.");
            break;
        case 8:
            echo("Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.");
            break;
        case 9:
            echo("Séisme capable de tout détruire sur une très vaste zone.");
            break;
        default:
            echo("Valeur inconnue");
    }
    ?>
  </body>
</html>
