<?php
require_once('conexion.php');

/* Iniciar Desafio Categoria Principiantes */
if((isset($_POST["start"])) && ($_POST["start"] == "PRINCIPIANTES")){
    $sql_datos = "SELECT * FROM datos_ciclista WHERE cat_ciclista='Principiantes' AND sexo_ciclista='M'";
    $ejec_datos = $conexion->query($sql_datos);
    $res_datos = $ejec_datos->fetch_array(MYSQLI_ASSOC);

    $sql_verif = "SELECT * FROM marcacion m, datos_ciclista d WHERE m.id_ciclista=d.id_ciclista AND d.cat_ciclista='Principiantes' AND d.sexo_ciclista='M' AND m.fecha_carrera='$fecha'";
    $ejec_verif = $conexion->query($sql_verif);
    $num_verif = $ejec_verif->num_rows;

    if($num_verif != 0){
        ?>
            <div class="modal-body">No se puede Iniciar Nuevamente la Carrera</div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        <?php
    }else{
        $hora_salida = date('H:i:s');
        do{
            $id_ciclista = $res_datos['id_ciclista'];
            $sql_iniciar = "INSERT INTO marcacion (id_ciclista, fecha_carrera, hora_salida) VALUES ('$id_ciclista', '$fecha', '$hora_salida')";
            $ejec_iniciar = $conexion->query($sql_iniciar);
        }while($res_datos = $ejec_datos->fetch_array(MYSQLI_ASSOC));
        ?>
            <div class="modal-body">Se Inicio Exitosamente la Carrera</div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        <?php
    }
}

/* Iniciar Desafio Categoria Avanzados */
if((isset($_POST["start"])) && ($_POST["start"] == "AVANZADOS")){
    $sql_datos = "SELECT * FROM datos_ciclista WHERE cat_ciclista='Avanzados' AND sexo_ciclista='M'";
    $ejec_datos = $conexion->query($sql_datos);
    $res_datos = $ejec_datos->fetch_array(MYSQLI_ASSOC);

    $sql_verif = "SELECT * FROM marcacion m, datos_ciclista d WHERE m.id_ciclista=d.id_ciclista AND d.cat_ciclista='Avanzados' AND d.sexo_ciclista='M' AND m.fecha_carrera='$fecha'";
    $ejec_verif = $conexion->query($sql_verif);
    $num_verif = $ejec_verif->num_rows;

    if($num_verif != 0){
        ?>
            <div class="modal-body">No se puede Iniciar Nuevamente la Carrera</div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        <?php
    }else{
        $hora_salida = date('H:i:s');
        do{
            $id_ciclista = $res_datos['id_ciclista'];
            $sql_iniciar = "INSERT INTO marcacion (id_ciclista, fecha_carrera, hora_salida) VALUES ('$id_ciclista', '$fecha', '$hora_salida')";
            $ejec_iniciar = $conexion->query($sql_iniciar);
        }while($res_datos = $ejec_datos->fetch_array(MYSQLI_ASSOC));
        ?>
            <div class="modal-body">Se Inicio Exitosamente la Carrera</div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        <?php
    }
}

/* Iniciar Desafio Categoria Damas */
if((isset($_POST["start"])) && ($_POST["start"] == "DAMAS")){
    $sql_datos = "SELECT * FROM datos_ciclista WHERE sexo_ciclista='F'";
    $ejec_datos = $conexion->query($sql_datos);
    $res_datos = $ejec_datos->fetch_array(MYSQLI_ASSOC);

    $sql_verif = "SELECT * FROM marcacion m, datos_ciclista d WHERE m.id_ciclista=d.id_ciclista AND d.sexo_ciclista='F' AND m.fecha_carrera='$fecha'";
    $ejec_verif = $conexion->query($sql_verif);
    $num_verif = $ejec_verif->num_rows;

    if($num_verif != 0){
        ?>
            <div class="modal-body">No se puede Iniciar Nuevamente la Carrera</div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        <?php
    }else{
        $hora_salida = date('H:i:s');
        do{
            $id_ciclista = $res_datos['id_ciclista'];
            $sql_iniciar = "INSERT INTO marcacion (id_ciclista, fecha_carrera, hora_salida) VALUES ('$id_ciclista', '$fecha', '$hora_salida')";
            $ejec_iniciar = $conexion->query($sql_iniciar);
        }while($res_datos = $ejec_datos->fetch_array(MYSQLI_ASSOC));
        ?>
            <div class="modal-body">Se Inicio Exitosamente la Carrera</div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        <?php
    }
}
?>