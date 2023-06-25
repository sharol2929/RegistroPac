<?php 
    header("location: index.php");
    include("conecta.php");
    $bd = conectar();
    
    $nom = $_REQUEST["txtnom"];
    $ape = $_REQUEST["txtape"];
    $cor = $_REQUEST["txtcor"];
    $dep = $_REQUEST["txtdep"];
    $ciu = $_REQUEST["txtciu"];
    $sin = $_REQUEST["txtsin"];
    $con = $_REQUEST["txtcon"];
    $con2 = $_REQUEST["txtcon2"];

    $sql = "insert into pacientes values('$nom','$ape','$cor','$dep','$ciu','$sin','$con','$con2')";
    //echo $sql;
    $res = mysqli_query($bd,$sql);
    mysqli_close($bd);
    

?>