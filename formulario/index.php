<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="registro.css" type="text/css">
    <title>Registro de pacientes </title>
</head>
<body>

    <div class="text-md-center">
        <h1 class="card-title text-black ">Registro de paciente</h1>
        <br>
    </div>
    <div class="container mx-auto text-center center card ">
        <div class="card-body">
            <h2 class="card-text text-black">Por favor ingrese sus datos</h2>
            <div class="container ">
                <form action="addpac.php" class="row g-3" method="get" >
                    <div class="col-md-4">
                        <label for="nombre" class="form-label">Nombre<small class="text-danger">*</small></label>
                        <input type="text" name="txtnom"  class="form-control" id="nombre" placeholder="nombre" required >
                    </div>
                    <div class="col-md-4">
                        <label for="apellido" class="form-label">Apellido<small class="text-danger">*</small></label>
                        <input type="text" name="txtape" class="form-control" id="apellido" placeholder="apellido" required>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="correo" class="form-label">Correo electrónico<small class="text-danger">*</small></label>
                            <input type="email" name="txtcor" class="form-control" id="correo" placeholder="Ingresa tu correo electrónico" required>
                          </div>
                    </div>
                    <div class="col-md-4 ">
                        <label for="departamento" class="form-label">Departamento</label>
                        <select name="txtdep" class="form-select" id="departamento">
                          <option selected disabled>Selecciona un departamento</option>
                          <option value="amazonas">Amazonas</option>
                          <option value="antioquia">Antioquia</option>
                          <option value="arauca">Arauca</option>
                          <option value="atlantico">Atlántico</option>
                          <option value="bolivar">Bolívar</option>
                          <option value="boyaca">Boyacá</option>
                          <option value="caldas">Caldas</option>
                          <option value="caqueta">Caquetá</option>
                          <option value="casanare">Casanare</option>
                          <option value="cauca">Cauca</option>
                          <option value="cesar">Cesar</option>
                          <option value="choco">Chocó</option>
                          <option value="cordoba">Córdoba</option>
                          <option value="cundinamarca">Cundinamarca</option>
                          <option value="guainia">Guainía</option>
                          <option value="guaviare">Guaviare</option>
                          <option value="huila">Huila</option>
                          <option value="la_guajira">La Guajira</option>
                          <option value="magdalena">Magdalena</option>
                          <option value="meta">Meta</option>
                          <option value="nariño">Nariño</option>
                          <option value="norte_de_santander">Norte de Santander</option>
                          <option value="putumayo">Putumayo</option>
                          <option value="quindio">Quindío</option>
                          <option value="risaralda">Risaralda</option>
                          <option value="san_andres_y_providencia">San Andrés y Providencia</option>
                          <option value="santander">Santander</option>
                          <option value="sucre">Sucre</option>
                          <option value="tolima">Tolima</option>
                          <option value="valle_del_cauca">Valle del Cauca</option>
                          <option value="vaupes">Vaupés</option>
                          <option value="vichada">Vichada</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <select name="txtciu" class="form-select" id="ciudad" >
                          <option selected >Primero seleccione un departamento</option>
                        </select>
                      </div>
                    <div class="col-md-4">
                        <label for="sintomas" class="form-label">Describe los sintomas<small class="text-danger">*</small></label>
                        <textarea name="txtsin" id="sintomas" cols="30" rows="1" class="form-control" required></textarea>
                        
                    </div>
                    <div class="col-md-10 mx-auto">
                        <label class="form-label" for="contraseña">
                            Contraseña<small class="text-danger">*</small>
                        </label>
                        <input class="form-control"  name="txtcon" type="password" value="" id="contraseña" required>
                        <div class="card-footer" >
                            <small id="min_max_contraseña" class="text">
                                Debe tener al menos 8 caracteres.<small class="text-danger">*</small>
                            </small><br>
                            <small id="num_contraseña" class="text">
                                Debe tener al menos un numero.<small class="text-danger">*</small>
                            </small><br>
                            <small id="mayus_contraseña" class="text">
                                Debe tener al menos una mayuscula.<small class="text-danger">*</small>
                            </small>
                        </div>
                    </div>
                    <div class="col-md-10 mx-auto">
                        <label class="form-label" for="validacion_contraseña">
                            Confirme su contraseña<small class="text-danger">*</small>
                        </label>
                        <input class="form-control" name="txtcon2" type="password" value="" id="validacion_contraseña" required>
                    </div>
                    <div id="error_contraseña" class="text-danger"></div>
                    <div class="col-12">
                        <button class="btn btn-outline-danger" type="reset">Cancelar</button>
                        <button class="btn btn-primary" onclick="validar()" type="submit">Enviar</button>
                    </div>
                    
                  </form>
                  <div >
                    <br>
                    <h2>Listado de pacientes registrados</h2>
                    <hr>
                    <table class="table col-15" >
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo Electronico</th>
                                <th>Departamento</th>
                                <th>Ciudad</th>
                                <th>Sintomas</th>
                                <th>Contraseña</th>
                                <th>Contraseña 2</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            include ("conecta.php"); 
                            $bd = conectar();
                            $sql = "select * from pacientes";
                            
                            // RES = Bloqe de datos/ Ejecute la sentencia sql en la bd
                            $res = mysqli_query($bd,$sql); 
                            
                            // Cuando no existen datos este ciclo se bloquea
                            while ($arr = mysqli_fetch_array($res)){
                                // Coje cada registro del bloque de datos a un array
                                // Se puede enviar más clausulas para nuevas consultas por iteración
                                
                                // [Nombre de los campos de la tabla de la bd o se puede poner indices] 
                                echo "<td>$arr[0]</td>";
                                echo "<td>$arr[1]</td>";
                                echo "<td>$arr[2]</td>";
                                echo "<td>$arr[3]</td>";
                                echo "<td>$arr[4]</td>";
                                echo "<td>$arr[5]</td>";
                                echo "<td>$arr[6]</td>";
                                echo "<td>$arr[7]</td>";
                                echo "</tr>";
                            }
                            // Liberar conexiones
                            mysqli_close($bd);
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    

</body>


<script src="prueva.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>