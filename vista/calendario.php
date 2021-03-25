<div class="container">

    <div class="row">

        <div class="col-6">
            <div class="form-group">
                <div class="form-group">
                    <label for="">TIPO DE SELECCION</label>
                    <select class="form-control" name="" id="">
                        <option>DIA</option>
                        <option>MES</option>
                        <option>AÑO</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php

        $mes = date('m');

        $año = date('y');



        $numero_dias = cal_days_in_month(CAL_GREGORIAN, $mes, $año);

        ?>

        <div class="col-12">
            <h5><?php echo date("F") ?></h5>
        </div>

        <?php for ($i = 1; $i <= $numero_dias; $i++) :
        ?>
            <div class="col-12">
                <div class="alert alert-dark" role="alert">
                    <strong>Día <span class="text-primary"><?php echo $i ?></span></strong>
                    
                </div>
            </div>
        <?php endfor; ?>

    </div>
</div>