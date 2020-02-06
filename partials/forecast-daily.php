<div class="row">

    <?php

    //Contados en 0
    $i = 0;

    //Empieza el foreach para que pille datos cada hora
    foreach ($forecast->daily->data as $day) :

        $average_temp = (round($day->temperatureHigh) + round($day->temperatureLow)) / 2;
    ?>

        <div class="col-12 col-md-4">
            <div class="card p-4 mb-4">
                <h2 class="h4">
                    <?php echo date("l", $day->time); ?>
                </h2>
                <h3 class="display-4">
                    <?php echo round($average_temp); ?>&deg;
                </h3>
                <div class="d-flex justify-content-between">
                    <p class="lead">
                        Alto <?php echo round($day->temperatureHigh); ?>&deg;
                    </p>
                    <p class="lead">
                        Bajo <?php echo round($day->temperatureLow); ?>&deg;
                    </p>
                </div>
                <p class="lead">
                    Humedad <?php echo $day->humidity * 100; ?>%
                </p>
                <p class="m-0">
                    <?php echo $day->summary; ?>
            </div>
        </div>

    <?php

        // Aumenta el contador por acción
        $i++;

        // Parar cuando tengamos 12 acciones
        if ($i == 5) break;

    //Termina el foreach
    endforeach;
    ?>
</div>