<?php
require_once('conexion.php');

/* Top general */
if((isset($_POST["puesto"])) && ($_POST["puesto"] == "GENERAL")){
    $sql_puesto = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC";
    $ejec_puesto = $conexion->query($sql_puesto);
    $res_puesto = $ejec_puesto->fetch_array(MYSQLI_ASSOC);

?>
    <script src="java/funciones.js"></script>    
    <p>Escriba en el campo de entrada para buscar en la lista:</p>  
    <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
    <br>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Puestos</th>
                <th>Nombre Completo</th>
                <th>Club</th>
                <th>Tiempo</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto['nom_ciclista']."</td>
                    <td>".$res_puesto['club_ciclista']."</td>
                    <td>".$res_puesto['tiempo_total']."</td>
                </tr>";
            }while($res_puesto = $ejec_puesto->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
<?php 
}
/* Top general ordenado por genero y categoria */
if((isset($_POST["puesto"])) && ($_POST["puesto"] == "AGRUPADO")){
    $sql_puesto = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND m.`tiempo_total` IS NOT NULL ORDER BY d.`sexo_ciclista` ASC, d.`cat_ciclista` ASC, m.`tiempo_total` ASC";
    $ejec_puesto = $conexion->query($sql_puesto);
    $res_puesto = $ejec_puesto->fetch_array(MYSQLI_ASSOC);

?>
    <script src="java/funciones.js"></script>
    <p>Escriba en el campo de entrada para buscar en la lista:</p>  
    <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
    <br>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Puestos</th>
                <th>Nombre Completo</th>
                <th>Club</th>
                <th>Tiempo</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto['nom_ciclista']."</td>
                    <td>".$res_puesto['club_ciclista']."</td>
                    <td>".$res_puesto['tiempo_total']."</td>
                </tr>";
            }while($res_puesto = $ejec_puesto->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
<?php 
}

?>