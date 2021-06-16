<?php
require_once('conexion.php');

/* Top Principiantes Varones */
if((isset($_POST["puesto"])) && ($_POST["puesto"] == "PRINCIPIANTES")){
    $sql_puesto = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Principiantes' AND d.`edad_ciclista` BETWEEN 15 AND 19 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto = $conexion->query($sql_puesto);
    $res_puesto = $ejec_puesto->fetch_array(MYSQLI_ASSOC);

    $sql_puesto2 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Principiantes' AND d.`edad_ciclista` BETWEEN 20 AND 24 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto2 = $conexion->query($sql_puesto2);
    $res_puesto2 = $ejec_puesto2->fetch_array(MYSQLI_ASSOC);

    $sql_puesto3 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Principiantes' AND d.`edad_ciclista` BETWEEN 25 AND 29 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto3 = $conexion->query($sql_puesto3);
    $res_puesto3 = $ejec_puesto3->fetch_array(MYSQLI_ASSOC);

    $sql_puesto4 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Principiantes' AND d.`edad_ciclista` BETWEEN 30 AND 34 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto4 = $conexion->query($sql_puesto4);
    $res_puesto4 = $ejec_puesto4->fetch_array(MYSQLI_ASSOC);

    $sql_puesto5 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Principiantes' AND d.`edad_ciclista` BETWEEN 35 AND 39 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto5 = $conexion->query($sql_puesto5);
    $res_puesto5 = $ejec_puesto5->fetch_array(MYSQLI_ASSOC);

    $sql_puesto6 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Principiantes' AND d.`edad_ciclista` BETWEEN 40 AND 44 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto6 = $conexion->query($sql_puesto6);
    $res_puesto6 = $ejec_puesto6->fetch_array(MYSQLI_ASSOC);

    $sql_puesto7 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Principiantes' AND d.`edad_ciclista` BETWEEN 45 AND 49 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto7 = $conexion->query($sql_puesto7);
    $res_puesto7 = $ejec_puesto7->fetch_array(MYSQLI_ASSOC);

    $sql_puesto8 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Principiantes' AND d.`edad_ciclista` BETWEEN 50 AND 54 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto8 = $conexion->query($sql_puesto8);
    $res_puesto8 = $ejec_puesto8->fetch_array(MYSQLI_ASSOC);

    $sql_puesto9 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Principiantes' AND d.`edad_ciclista` BETWEEN 55 AND 80 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto9 = $conexion->query($sql_puesto9);
    $res_puesto9 = $ejec_puesto9->fetch_array(MYSQLI_ASSOC);

?>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 15 a 19 años</th>
            </tr>
        </thead>
        <tbody>
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
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 20 a 24 años</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto2['nom_ciclista']."</td>
                    <td>".$res_puesto2['club_ciclista']."</td>
                    <td>".$res_puesto2['tiempo_total']."</td>
                </tr>";
            }while($res_puesto2 = $ejec_puesto2->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 25 a 29 años</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto3['nom_ciclista']."</td>
                    <td>".$res_puesto3['club_ciclista']."</td>
                    <td>".$res_puesto3['tiempo_total']."</td>
                </tr>";
            }while($res_puesto3 = $ejec_puesto3->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 30 a 34 años</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto4['nom_ciclista']."</td>
                    <td>".$res_puesto4['club_ciclista']."</td>
                    <td>".$res_puesto4['tiempo_total']."</td>
                </tr>";
            }while($res_puesto4 = $ejec_puesto4->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 35 a 39 años</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto5['nom_ciclista']."</td>
                    <td>".$res_puesto5['club_ciclista']."</td>
                    <td>".$res_puesto5['tiempo_total']."</td>
                </tr>";
            }while($res_puesto5 = $ejec_puesto5->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 40 a 44 años</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto6['nom_ciclista']."</td>
                    <td>".$res_puesto6['club_ciclista']."</td>
                    <td>".$res_puesto6['tiempo_total']."</td>
                </tr>";
            }while($res_puesto6 = $ejec_puesto6->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 45 a 49 años</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto7['nom_ciclista']."</td>
                    <td>".$res_puesto7['club_ciclista']."</td>
                    <td>".$res_puesto7['tiempo_total']."</td>
                </tr>";
            }while($res_puesto7 = $ejec_puesto7->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 50 a 54 años</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto8['nom_ciclista']."</td>
                    <td>".$res_puesto8['club_ciclista']."</td>
                    <td>".$res_puesto8['tiempo_total']."</td>
                </tr>";
            }while($res_puesto8 = $ejec_puesto8->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 55 años en adelante.</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto9['nom_ciclista']."</td>
                    <td>".$res_puesto9['club_ciclista']."</td>
                    <td>".$res_puesto9['tiempo_total']."</td>
                </tr>";
            }while($res_puesto9 = $ejec_puesto9->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
<?php 
}
/* Top Avanzados Varones */
if((isset($_POST["puesto"])) && ($_POST["puesto"] == "AVANZADOS")){
    $sql_puesto = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Avanzados' AND d.`edad_ciclista` BETWEEN 15 AND 19 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto = $conexion->query($sql_puesto);
    $res_puesto = $ejec_puesto->fetch_array(MYSQLI_ASSOC);

    $sql_puesto2 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Avanzados' AND d.`edad_ciclista` BETWEEN 20 AND 24 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto2 = $conexion->query($sql_puesto2);
    $res_puesto2 = $ejec_puesto2->fetch_array(MYSQLI_ASSOC);

    $sql_puesto3 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Avanzados' AND d.`edad_ciclista` BETWEEN 25 AND 29 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto3 = $conexion->query($sql_puesto3);
    $res_puesto3 = $ejec_puesto3->fetch_array(MYSQLI_ASSOC);

    $sql_puesto4 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Avanzados' AND d.`edad_ciclista` BETWEEN 30 AND 34 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto4 = $conexion->query($sql_puesto4);
    $res_puesto4 = $ejec_puesto4->fetch_array(MYSQLI_ASSOC);

    $sql_puesto5 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Avanzados' AND d.`edad_ciclista` BETWEEN 35 AND 39 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto5 = $conexion->query($sql_puesto5);
    $res_puesto5 = $ejec_puesto5->fetch_array(MYSQLI_ASSOC);

    $sql_puesto6 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Avanzados' AND d.`edad_ciclista` BETWEEN 40 AND 44 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto6 = $conexion->query($sql_puesto6);
    $res_puesto6 = $ejec_puesto6->fetch_array(MYSQLI_ASSOC);

    $sql_puesto7 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Avanzados' AND d.`edad_ciclista` BETWEEN 45 AND 49 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto7 = $conexion->query($sql_puesto7);
    $res_puesto7 = $ejec_puesto7->fetch_array(MYSQLI_ASSOC);

    $sql_puesto8 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Avanzados' AND d.`edad_ciclista` BETWEEN 50 AND 54 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto8 = $conexion->query($sql_puesto8);
    $res_puesto8 = $ejec_puesto8->fetch_array(MYSQLI_ASSOC);

    $sql_puesto9 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='M' AND d.`cat_ciclista`='Avanzados' AND d.`edad_ciclista` BETWEEN 55 AND 80 AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto9 = $conexion->query($sql_puesto9);
    $res_puesto9 = $ejec_puesto9->fetch_array(MYSQLI_ASSOC);

?>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 15 a 19 años</th>
            </tr>
        </thead>
        <tbody>
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
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 20 a 24 años</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto2['nom_ciclista']."</td>
                    <td>".$res_puesto2['club_ciclista']."</td>
                    <td>".$res_puesto2['tiempo_total']."</td>
                </tr>";
            }while($res_puesto2 = $ejec_puesto2->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 25 a 29 años</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto3['nom_ciclista']."</td>
                    <td>".$res_puesto3['club_ciclista']."</td>
                    <td>".$res_puesto3['tiempo_total']."</td>
                </tr>";
            }while($res_puesto3 = $ejec_puesto3->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 30 a 34 años</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto4['nom_ciclista']."</td>
                    <td>".$res_puesto4['club_ciclista']."</td>
                    <td>".$res_puesto4['tiempo_total']."</td>
                </tr>";
            }while($res_puesto4 = $ejec_puesto4->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 35 a 39 años</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto5['nom_ciclista']."</td>
                    <td>".$res_puesto5['club_ciclista']."</td>
                    <td>".$res_puesto5['tiempo_total']."</td>
                </tr>";
            }while($res_puesto5 = $ejec_puesto5->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 40 a 44 años</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto6['nom_ciclista']."</td>
                    <td>".$res_puesto6['club_ciclista']."</td>
                    <td>".$res_puesto6['tiempo_total']."</td>
                </tr>";
            }while($res_puesto6 = $ejec_puesto6->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 45 a 49 años</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto7['nom_ciclista']."</td>
                    <td>".$res_puesto7['club_ciclista']."</td>
                    <td>".$res_puesto7['tiempo_total']."</td>
                </tr>";
            }while($res_puesto7 = $ejec_puesto7->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 50 a 54 años</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto8['nom_ciclista']."</td>
                    <td>".$res_puesto8['club_ciclista']."</td>
                    <td>".$res_puesto8['tiempo_total']."</td>
                </tr>";
            }while($res_puesto8 = $ejec_puesto8->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Edad de 55 años en adelante.</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto9['nom_ciclista']."</td>
                    <td>".$res_puesto9['club_ciclista']."</td>
                    <td>".$res_puesto9['tiempo_total']."</td>
                </tr>";
            }while($res_puesto9 = $ejec_puesto9->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
<?php 
}
/* Top Damas */
if((isset($_POST["puesto"])) && ($_POST["puesto"] == "DAMAS")){
    $sql_puesto = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='F' AND d.`cat_ciclista`='PRINCIPIANTE' AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto = $conexion->query($sql_puesto);
    $res_puesto = $ejec_puesto->fetch_array(MYSQLI_ASSOC);

    $sql_puesto2 = "SELECT	* FROM marcacion m, datos_ciclista d WHERE m.`id_ciclista`=d.`id_ciclista` AND m.`fecha_carrera`='$fecha' AND d.`sexo_ciclista`='F' AND d.`cat_ciclista`='AVANZADO' AND m.`tiempo_total` IS NOT NULL ORDER BY m.`tiempo_total` ASC LIMIT 3";
    $ejec_puesto2 = $conexion->query($sql_puesto2);
    $res_puesto2 = $ejec_puesto2->fetch_array(MYSQLI_ASSOC);
?>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Damas Categoria PRINCIPIANTES.</th>
            </tr>
        </thead>
        <tbody>
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
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th colspan="4">Damas Categoria AVANZADOS.</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; do{ $i++;
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$res_puesto2['nom_ciclista']."</td>
                    <td>".$res_puesto2['club_ciclista']."</td>
                    <td>".$res_puesto2['tiempo_total']."</td>
                </tr>";
            }while($res_puesto2 = $ejec_puesto2->fetch_array(MYSQLI_ASSOC));?>
        </tbody>
    </table>
<?php
}

?>