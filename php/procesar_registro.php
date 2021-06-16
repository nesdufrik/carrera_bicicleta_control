<?php
require_once("conexion.php");

function calcularEdad($calcular){
    list($Y,$m,$d) = explode("-",$calcular);
    return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y);
}

$ci_ciclista = $_POST['ci_ciclista'];
$nom_ciclista = $_POST['nom_ciclista'];
$club_ciclista = $_POST['club_ciclista'];
$nac_ciclista = $_POST['nac_ciclista'];
$sexo_ciclista = $_POST['sexo_ciclista'];
$telf_ciclista = $_POST['telf_ciclista'];
$cat_ciclista = $_POST['cat_ciclista'];
$seg_ciclista = $_POST['seg_ciclista'];
$nom_emergencia = $_POST['nom_emergencia'];
$telf_emergencia = $_POST['telf_emergencia'];
$num_ciclista = $_POST['num_ciclista'];

echo $_POST['club_ciclista'];

if(empty($nom_ciclista) or empty($nac_ciclista) or empty($sexo_ciclista) or empty($cat_ciclista)){

    ?>
    <div class="modal-body">Existen campos vacios, favor revise nuevamente el formulario</div>
    <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
<?php
} else {
    $sql_num = "SELECT * FROM datos_ciclista WHERE num_ciclista='$num_ciclista'";
    $ejec_num = $conexion->query($sql_num);
    $res_num = $ejec_num->fetch_array(MYSQLI_ASSOC);

    if(empty($res_num['num_ciclista'])){
        $edad_ciclista = calcularEdad("$nac_ciclista");
        $sql_reg = "INSERT INTO datos_ciclista (ci_ciclista, nom_ciclista, club_ciclista, nac_ciclista, sexo_ciclista, edad_ciclista, telf_ciclista, cat_ciclista, seg_ciclista, nom_emergencia, telf_emergencia, num_ciclista) VALUES ('$ci_ciclista','$nom_ciclista','$club_ciclista','$nac_ciclista','$sexo_ciclista','$edad_ciclista','$telf_ciclista','$cat_ciclista','$seg_ciclista','$nom_emergencia','$telf_emergencia','$num_ciclista')";
        $ejec_reg = $conexion->query($sql_reg);
        ?>
        <script src="java/funciones.js"></script>
        <div class="modal-body">Se registro correctamente al Participante</div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn">Cerrar</button>
        </div>
    <?php
    } else {
        ?>
        <div class="modal-body">El numero de corredor ya se encuentra asignado.</div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
    <?php
    }
}
?>