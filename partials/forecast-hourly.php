<ul class="list-group" style="margin: 0 auto; max-width: 320px;">

    <?php

    //Contados en 0
    $i = 0;

    //Empieza el foreach para que pille datos cada hora
    foreach ($forecast->hourly->data as $hour) :

    ?>

        <li class="list-group-item d-flex justify-content-between">
            <p class="lead m-0">
                <?php echo date("g a", $hour->time); ?>
            </p>
            <p class="lead m-0">
                <?php echo round($hour->temperature); ?>&deg;
            </p>
            <p class="lead m-0">
                Humedad <?php echo $hour->humidity * 100; ?>%
            </p>
        </li>

    <?php

        // Aumenta el contador por acción
        $i++;

        // Parar cuando tengamos 12 acciones
        if ($i == 6) break;

    //Termina el foreach
    endforeach;
    ?>
</ul>