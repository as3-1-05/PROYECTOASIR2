<?php

//prueba1
//34.5794,-118.1165

if (isset($_POST['location']) || isset($_POST['coordinates'])) {
    $location = htmlentities($_POST['location']);
    $coordinates = $location;
    $api_url = 'https://api.darksky.net/forecast/e41d8193b1312dc0eb8f4916dcfe5e1a/' . $coordinates;

    $forecast = json_decode(file_get_contents($api_url));

    // echo '<pre>';
    //print_r($forecast);
    //echo '</pre>';

    // Datuak
    $temperature_current = round($forecast->currently->temperature);
    $summary_current = $forecast->currently->summary;
    $windspeed_current = round($forecast->currently->windSpeed);
    $humidity_current = $forecast->currently->humidity * 100;

    // Establece zona horaria basada en la ubicación buscada
    date_default_timezone_set($forecast->timezone);
}
