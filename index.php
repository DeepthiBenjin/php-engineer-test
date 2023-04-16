<?php
/*
 * Flicker Leap PHP Engineer Test
 *
 * This is where the magic happens. Run all code in here to show your end result.
 */

require __DIR__ . '/vendor/autoload.php';

use FlickerLeap\Diamond;
use FlickerLeap\Rectangle;
use FlickerLeap\Square;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flicker Leap - PHP Engineer Test</title>
    </head>
    <style type="text/css">
        body{line-height: 1em;}
    </style>
    <body>

        <h1>PHP Engineer Test</h1>

        <h2>Hello World</h2>

        <p>At the end of this test, you should have all the answers on this page.</p>

        <h2>Output a square</h2>

        <?php
            // implement the square class here
            $square = new Square(10);
            $square->draw();
        ?>

        <h2>Output a diamond</h2>

        <?php
            // output your diamond here
            $diamond = new Diamond(5);
            $diamond->displayName();
            $diamond->draw();
        ?>

        <h2>Output your rectangle</h2>

        <?php
            // output your working rectangle here
            $rectangle = new FlickerLeap\Rectangle(10);
            $rectangle->draw();
        ?>

        <h2>Output the result of the API</h2>

        <?php
            // Use the Httpful client to output the API results here.
            $url = "http://pokeapi.co/api/v2/pokemon/mewtwo/";
            $curl = curl_init(); 
    	//$postFields=stripslashes(json_encode($fields));
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLINFO_HEADER_OUT => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded'
                ),
            ));
            $responses = curl_exec($curl);
            curl_close($curl);

            $pokemon = json_decode($responses, true);
            //var_dump($responses);

            echo "Name: " . $pokemon['name'] . "<br>";
            echo "ID: " . $pokemon['id'] . "<br>";
            echo "Base Experience: " . $pokemon['base_experience'] . "<br>";
        ?>

        <h2>Recommendations</h2>

        <p><!-- Let us know how we can improve this test here --></p>

    </body>
</html>
