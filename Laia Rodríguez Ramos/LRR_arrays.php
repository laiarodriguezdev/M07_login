<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laia Rodríguez Ramos</title>
</head>
<body>
    <?php

        /*----EXERCICI 1----*/
        echo "<h1 style='margin:auto;text-align:center;'>RESTAURANT</h1>";

    ?>
        <div style="width:225px;padding:15px;margin:auto;border:1px dotted red;">
    <?php

        $taulesRestaurant = array();
        
        for ($taula = 0; $taula < 10; $taula++) {
            $taulesRestaurant[$taula] = rand(0, 5);
            //echo "La taula ". $taula ." té ". $taulesRestaurant[$taula] . " comensals.<br>";
            if($taulesRestaurant[$taula] == 0){
                echo "La taula ". $taula ." està buida.<br>";
            }
            elseif($taulesRestaurant[$taula] == 5){
                echo "La taula ". $taula ." està plena.<br>";
            }
            else{
                echo "La taula ". $taula ." té ". $taulesRestaurant[$taula] . " comensals.<br>";
            }
        }
    ?>

        </div>
        <br>
    <?php

        /*----EXERCICI 2----*/
        echo "<h1 style='margin:auto;text-align:center;'>HOTEL</h1>";

    ?>
        <div style="width:350px;padding:15px;margin:auto;border:1px dotted purple;">
    <?php

        $hotel = array();

        for($planta = 0; $planta < 5; $planta++){
            for($hab = 0; $hab < 10; $hab++){
                //ASSIGNO CLIENTS SEGONS PLANTA I HABITACIO
                $hotel[$planta][$hab] = rand(0,4);

                //echo "ets a la planta " . $planta . " a la habitacio " . $hab . "<br>";

                if($hotel[$planta][$hab] == 0){
                    echo "La habitació ". $hab ." de la planta " . $planta . " està buida.<br>";
                }
                elseif($hotel[$planta][$hab] == 4){
                    echo "La habitació ". $hab ." de la planta " . $planta . " està plena.<br>";
                }
                else{
                    echo "La habitació ". $hab . " de la planta " . $planta ." té ". $hotel[$planta][$hab] . " comensals.<br>";
                }
            }
        }

    ?>
        </div>
    <?php

    ?>
</body>
</html>