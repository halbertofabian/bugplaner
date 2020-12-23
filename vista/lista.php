<div class="container mt-2">
    <?php

    $firstDate = "2020-01-20";
    $secondDate = "2021-01-20";

    $dateDifference = abs(strtotime($secondDate) - strtotime($firstDate));

    $years  = floor($dateDifference / (365 * 60 * 60 * 24));
    $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    // echo $years . " year,  " . $months . " months and " . $days . " days";




    $registros = RegistrModelo::mdlConsultaRegistro($_SESSION['session_usr']['usr_id']);
    $fechainicial = new DateTime('2020-01-01');
    $fechafinal = new DateTime('2021-01-01');

    $diferencia = $fechainicial->diff($fechafinal);

    // El método diff nos devuelve un objeto del tipo DateInterval,
    // que almacena la información sobre la diferencia de tiempo 
    // entre fechas (años, meses, días, etc.).

    // echo $meses = ($diferencia->y * 12) + $diferencia->m;

    // Para calcular los meses tendremos que multiplicar el atributo “y” por 12 
    // (número de meses que contiene un año). Luego le sumamos el valor que hay 
    // en el atributo “m“, quien contiene el número de meses en nuestro intervalo de tiempo.

    foreach ($registros as $key => $value) :
    ?>
        <?php if ($value['rgt_recordatorio'] == 'Cada día') : ?>
            <div class=" mt-1 alert-btn alert alert-success" role="alert">
                <strong><?php echo $value['rgt_descripcion'] ?></strong>
                <p><?php echo 'Avance: '.$value['rgt_recordatorio']; ?></p>
                <?php if ($value['rgt_fecha_limite'] != "0000-00-00") : ?>
                    <p><?php echo 'Fecha limite: ' . $value['rgt_fecha_limite'] ?></p>
                <?php endif; ?>

                <button class="btn btn-sm btn-outline-danger float-right mb-4 btnEliminarRegistro" rgt_id="<?php echo $value['rgt_id'] ?>"><i class="fa fa-times"></i></button>
                <br>
                <br>
            </div>
        <?php endif; ?>

        <?php if ($value['rgt_recordatorio'] == 'Cada semana') : ?>
            <div class=" mt-1 alert-btn alert alert-info" role="alert">
                <strong><?php echo $value['rgt_descripcion'] ?></strong>
                <p><?php echo 'Avance: '.$value['rgt_recordatorio']; ?></p>
                <?php if ($value['rgt_fecha_limite'] != "0000-00-00") : ?>
                    <p><?php echo 'Fecha limite: ' . $value['rgt_fecha_limite'] ?></p>
                <?php endif; ?>
                <button class="btn btn-sm btn-outline-danger float-right mb-4 btnEliminarRegistro" rgt_id="<?php echo $value['rgt_id'] ?>"><i class="fa fa-times"></i></button>
                <br>
                <br>
            </div>
        <?php endif; ?>

        <?php if ($value['rgt_recordatorio'] == 'Cada Mes') : ?>
            <div class=" mt-1 alert-btn alert alert-warning" role="alert">
                <strong><?php echo $value['rgt_descripcion'] ?></strong>
                <p><?php echo 'Avance: '.$value['rgt_recordatorio']; ?></p>
                <?php if ($value['rgt_fecha_limite'] != "0000-00-00") : ?>
                    <p><?php echo 'Fecha limite: ' . $value['rgt_fecha_limite'] ?></p>
                <?php endif; ?>
                <button class="btn btn-sm btn-outline-danger float-right mb-4 btnEliminarRegistro" rgt_id="<?php echo $value['rgt_id'] ?>"><i class="fa fa-times"></i></button>
                <br>
                <br>
            </div>
        <?php endif; ?>
        <?php if ($value['rgt_recordatorio'] == 'Cada Año') : ?>
            <div class=" mt-1 alert-btn alert alert-danger" role="alert">
                <strong><?php echo $value['rgt_descripcion'] ?></strong>
                <p><?php echo 'Avance: '.$value['rgt_recordatorio']; ?></p>
                <?php if ($value['rgt_fecha_limite'] != "0000-00-00") : ?>
                    <p><?php echo 'Fecha limite: ' . $value['rgt_fecha_limite'] ?></p>
                <?php endif; ?>
                <button class="btn btn-sm btn-outline-danger float-right mb-4 btnEliminarRegistro" rgt_id="<?php echo $value['rgt_id'] ?>"><i class="fa fa-times"></i></button>
                <br>
                <br>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<br>
<br>