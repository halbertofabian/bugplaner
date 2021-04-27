<br>
<br>
<br>
<style>
    .alert-purple {
        border-left: 4px #9C4ADA solid;
    }
</style>
<div class="container">
    <form method="post">
        <div class="row">

            <div class="col-8 ">
                <div class="form-group">
                    <div class="form-group">
                        <label for="">Elije el tiempo</label>
                        <select class="form-control" name="dft_tipo" id="dft_tipo">
                            <option value="DIARIO">DIARIO</option>
                            <option value="SEMANAL">SEMANAL</option>
                            <option value="MENSUAL">MENSUAL</option>
                            <option value="ANUAL">ANUAL</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="row" id="contenedor">

    </div>

    <hr>
    <h5>Mis objetivos</h5>
    <div class="row" id="contenedor-usr">

    </div>

    <hr>





    <table class="table">
        <thead>
            <!-- Titulo -->
            <tr>
                <th>
                    <strong>LA IMPORTANCIA DE LA PLANEACION DE METAS</strong>
                </th>
            </tr>
            <!-- Descripcón -->
            <tr>
                <td style="overflow-y: scroll; ">
                    <div style="height:200px;">
                        <i>
                            Pongamos por ejemplo; Cuando pensamos en vacaciones iniciamos platicando con las personas que nos van acompañar, nuestra familia, amigos, compañeros de trabajo, de escuela etc… para decidir a donde iremos, cuantos días estaremos en ese lugar, cuanto gastaremos, que medio de transporte utilizaremos, que hotel reservaremos, cuanto más estemos informados y lo tengamos todo planificado y por escrito, podremos disfrutar de nuestras vacaciones al máximo de una mejor manera, más tranquilo, sin estrés, gastando lo planificado.

                            Otro pequeño ejemplo es; no podemos iniciar una trayectoria sin saber a dónde vamos, siempre solemos tener un destino y si nunca hemos ido, debemos tener un mapa que nos indique por donde irnos, un mapa que nos indique que lugares se encuentran por ahí, y que en el trayecto habrá señalamientos que nos marquen velocidad, curvas, cruce de peatones etc… pues así es nuestra vida, tenemos que elaborar un mapa a nuestras necesidades, para para llegar a ahí, a la meta, un mapa que nos indique donde acelerar o donde frenar.

                            Así mismo podemos planificar nuestra vida a corto, mediano y largo plazo, unas vacaciones suelen ser a corto plazo, pero nuestra vida es posible visualizarla a largo plazo, nuestra imaginación suele ser infinita, podemos planificar a largo plazo sin limitación, en este instante es posible iniciar o retomar como queremos vivir en 5, 10, 15 años hasta llegar a nuestro momento de retiro, disfrutando cada momento de la vida trabajando en cada rol o área que nos corresponde en el trayecto, utilizar la imaginación para vernos haciendo y logrando cada meta. Mas sin embargo es de suma importancia identificar cuáles serán nuestras herramientas o medios para lograr esos resultados, esas metas.

                            Pero para iniciar propongo que se utilicen las herramientas o medios con las que ya estamos trabajando o haciendo lo actual, pero poco a poco vayamos sumándole pequeños esfuerzos, cambiando hábitos que ayuden a sumar, hábitos positivos que nos den energía para lograr nuestras metas y eliminando los hábitos que nos restan, nos conocemos y sabemos lo que hacemos bien y donde lo hacemos bien hay que trabajar en perfeccionar la formula, y también sabemos dónde está nuestro talón de Aquiles.

                            Si identificamos nuestros roles de mayor importancia en nuestras vidas podemos iniciar a planificar metas que nos guiaran y ayudaran a obtener respuestas que queremos conseguir para vivirlas, palparlas, visualizar etc… obliguémonos a pensar que ya estamos viviendo nuestro sueño.

                            A nosotros nos corresponde hacernos responsables de nuestras propias vidas, cambiemos los paradigmas negativos (el no puedo, el no soy inteligente, que la situación económica del país no lo ha permitido, que la economía del país no ayuda, que la competencia es mejor que nosotros etc…) que traemos arraigados, no culpemos a nadie, ni a nada por lo que no hemos logrado, conquistemos la cima de nuestros sueños, la suma de pequeños esfuerzos diarios edificara

                            nuestras metas y objetivos, nuestra vida será lo que nosotros deseamos que sea, claro y por supuesto, con la ayuda de Dios, nuestra fe o creencias.
                        </i>
                    </div>

                </td>
            </tr>


            <!-- ------ -->
            <!-- Titulo -->
            <tr>
                <th>
                    <strong>NARRACIÓN DE MI HISTORIA </strong>
                    <button class="btn btn-default btn-sm float-right" id="editarMiHistoria"><i class="fas fa-edit    "></i></button>
                    <button class="btn btn-primary btn-sm float-right d-none" id="guardarMiHistoria"><i class="fas fa-save    "></i></button>
                </th>
            </tr>
            <!-- Descripcón -->
            <tr>
                <td>
                    <?php
                    $miHistoria = RegistrModelo::mdlConsultarMiHistoria($_SESSION['session_usr']['usr_id']);

                    ?>
                    <i id="miHistoria"><?php echo $miHistoria['hst_text'] ?></i>
                    <textarea name="" class="form-control d-none" id="contenedorHistoria" cols="30" rows="30"><?php echo $miHistoria['hst_text'] ?></textarea>
                </td>
            </tr>


            <!-- ------ -->
            <!-- Titulo -->
            <tr>
                <th>
                    <strong>¿Qué meta te gustaría lograr en tu vida? ¡Tú más grandes sueño! </strong>
                    <button class="btn btn-default btn-sm float-right" id="editarMiMeta"><i class="fas fa-edit    "></i></button>
                    <button class="btn btn-primary btn-sm float-right d-none" id="guardarMiMeta"><i class="fas fa-save    "></i></button>
                </th>
            </tr>
            <!-- Descripcón -->
            <tr>
                <td>
                    <i>
                        <i id="miMeta"><?php echo $miHistoria['hst_meta'] ?></i>
                    </i>
                    <textarea name="" class="form-control d-none" id="contenedorMeta" cols="30" rows="30"><?php echo $miHistoria['hst_meta'] ?></textarea>
                </td>
            </tr>

            <!-- ------ -->
            <!-- Titulo -->
            <tr>
                <th>
                    <strong>¿Cómo te gustaría que te recordaran tus familiares, amigos, compañeros de trabajo o escuela etc…, cuando ya no estés en este mundo? </strong>
                    <button class="btn btn-default btn-sm float-right" id="editarMiFilosofia"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-primary btn-sm float-right d-none" id="guardarMiFilosofia"><i class="fas fa-save"></i></button>
                </th>
            </tr>
            <!-- Descripcón -->
            <tr>
                <td>
                    <i id="miFilosofia"><?php echo $miHistoria['hst_filosofia'] ?></i>
                    <textarea name="" class="form-control d-none" id="contenedorFilosofia" cols="30" rows="30"><?php echo $miHistoria['hst_filosofia'] ?></textarea>
                </td>
            </tr>




        </thead>
    </table>
</div>