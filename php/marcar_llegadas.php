<?php
require_once('conexion.php');

function tiempoTotal($salida,$llegada){
    $h1 = new DateTime($salida);
    $h2 = new DateTime($llegada);
    $t = $h1->diff($h2);
    return $t->format('%H:%I:%S');
}

if((isset($_POST["marcar_llegada"])) && ($_POST["marcar_llegada"] == "LLEGADA")){
    $num_ciclista = $_POST['num_ciclista'];
    $sql_salida = "SELECT * FROM marcacion m, datos_ciclista d WHERE m.id_ciclista=d.id_ciclista AND d.num_ciclista='$num_ciclista'";
    $ejec_salida = $conexion->query($sql_salida);
    $res_salida = $ejec_salida->fetch_array(MYSQLI_ASSOC);
    $hora_salida = $res_salida['hora_salida'];
    if($res_salida['hora_llegada'] != NULL){
        ?>
            <script src="java/funciones.js"></script>
            <div class="modal-body"><strong><?php echo $res_salida['nom_ciclista']; ?></strong> ya tiene registrada su hora de llegada</div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn">Cerrar</button>
            </div>
        <?php
    }else{
        $hora_llegada = date('H:i:s');
        $tiempo_total = tiempoTotal($hora_salida,$hora_llegada);
        $sql_llegada = "UPDATE marcacion m, datos_ciclista d SET m.hora_llegada='$hora_llegada', m.tiempo_total='$tiempo_total' WHERE m.id_ciclista=d.id_ciclista AND d.num_ciclista='$num_ciclista'";
        $ejec_llegada = $conexion->query($sql_llegada);
        ?>
            <script src="java/funciones.js"></script>
            <div class="modal-body"><strong><?php echo $tiempo_total; ?></strong> es el tiempo total de <strong><?php echo $res_salida['nom_ciclista']; ?></strong></div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn">Cerrar</button>
            </div>
        <?php
    }
}