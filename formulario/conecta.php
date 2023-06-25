<!-- ESTABLECE LA CONEXIÓN A LA BASE DE DATOS -->
<!-- Para usar más bd se deben crear más archivos de conexión -->
<?php
function conectar (){
    // Instancia a la bd que queremos llamar = equipo que tiene la bd(ip o dominio público)/usuario/contraseña/nombre de la bd
    $bd = mysqli_connect('db:3306','admin','lolita','db_formulario');

    if (!$bd){
        echo "<h3>Conexión no realizada</h3>";
        return NULL;
    }
    return $bd;
}
?>