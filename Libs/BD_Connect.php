<?php

header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json");

//Clase para conectarse a una base de datos Mysql
class Conexion{

  public $conexion = null;

  function __construct(){
    $this->connect();
  }

  function connect(){

      $conexion = mysqli_connect(BD_HOST,BD_USER,BD_PASS,BD_NAME,BD_PORT) or die(mysqli_connect_error());

  return $conexion;
  }

  //Funcion para desconectar una conexion existente
  function disconnect($conex){
    mysqli_close($conex);
  }

  //Funcion para traer todos la informacion de la base de datos
  public function readAll($con){
    $respuesta = array();

    //Consulta
    $sql = "SELECT * FROM bieibkr3va1akfouugbz.doctores;";

    // Ejecutar consulta
    $resultado = mysqli_query($con,$sql) or die(mysqli_connect_error());

    //El caso resultado tiene un valor verdadero o mayor a 0
    if (mysqli_num_rows($resultado) > 0) {

      $respuesta["Datos"] = array();

      while ($row = mysqli_fetch_array($resultado)) {

          $datos = array();
          $datos["id"] = $row["id"];
          $datos["name"] = $row["name"];
          $datos["email"] = $row["email"];
          $datos["direccion"] = $row["direccion"];
          $datos["ciudad"] = $row["ciudad"];

          //Asignarle datos al array creado
          array_push($respuesta["Datos"], $datos);

      }
      $respuesta["success"] = 1;
      //echo json_encode($respuesta);
    }else {
      $respuesta["success"] = 0;
      $respuesta["message"] = "No se encontran datos";
      //echo json_encode($respuesta);
    }
    return $respuesta;
  }

  //Funcion para insertar datos a la tabla
  public function insert($datos, $con){

    //Asignacion de datos
    $name = $datos['name'];
    $email = $datos['email'];
    $direccion = $datos['direccion'];
    $ciudad = $datos['ciudad'];

    //consulta
    $sql = "INSERT INTO `bieibkr3va1akfouugbz`.`doctores` (`id`, `name`,`email`, `direccion`,`ciudad`) VALUES (NULL, '$name', '$email', '$direccion', '$ciudad');";

    //Ejecutar consulta
    $resultado = mysqli_query($con,$sql) or die(mysqli_connect_error());

    //Si el valor del resultado es verdadero, realizar la siguiente instruccion
    if($resultado){
        return true;
    }else{
        return false;
    }
  }

  //Funcion para actualizar datos a la tabla
  public function update($datos, $con){

    $id = $datos['id'];
    $name = $datos['name'];
    $email = $datos['email'];
    $direccion = $datos['direccion'];
    $ciudad = $datos['ciudad'];

    $sql = "UPDATE `bieibkr3va1akfouugbz`.`doctores` SET `name` = '$name', `email` = '$email',
     `direccion` = '$direccion', `ciudad` = '$ciudad' WHERE (`id` = '$id');";

    $resultado = mysqli_query($con,$sql);

    if ($resultado) {
      return true;
    }else {
      return false;
    }
  }

  //Funcion para eliminar datos a la tabla
  public function delete($id,$con){

    $sql = "DELETE FROM `bieibkr3va1akfouugbz`.`doctores` WHERE (`id` = '$id');";

    $resultado = mysqli_query($con,$sql);

    if ($resultado) {
        return true;
    }else {
        return false;
    }
  }

  public function search($data,$con){

    $salida = "";
    $sql = "SELECT * FROM bieibkr3va1akfouugbz.doctores;";

      if (isset($data)) {
        $sql = "SELECT d.id, d.name, d.email, d.direccion, d.ciudad FROM bieibkr3va1akfouugbz.doctores AS d WHERE d.name 
      LIKE '%$data%' OR d.email LIKE '%$data%' OR d.ciudad LIKE '%$data%'";
      }

      $resultado = mysqli_query($con,$sql);

      if (mysqli_num_rows($resultado) > 0) {
      
      $salida = "<table class='table'>
                  <thead>
                      <tr>
                      <th scope='col'>Id</th>
                      <th scope='col'>Name</th>
                      <th scope='col'>Email</th>
                      <th scope='col'>Direccion</th>
                      <th scope='col'>Ciudad</th>
                      </tr>
                  </thead>
                  <tbody>"; 

      while ($row = mysqli_fetch_array($resultado)) {

          $salida.= "<tr>
                      <td>".$row["id"]."</td>
                      <td>".$row["name"]."</td>
                      <td>".$row["email"]."</td>
                      <td>".$row["direccion"]."</td>
                      <td>".$row["ciudad"]."</td>
                      <td>
                          <button class='btn btn-primary botonedit' type='button' data-bs-toggle='modal' data-bs-target='#editmodal'><i class='bi bi-pen'></i></button>
                          <button class='btn btn-danger botondelete' type='button' data-bs-toggle='modal' data-bs-target='#deletemodal'><i class='bi bi-x-lg'></i></button>
                      </td>
                    </tr>";

      }

        $salida.= "</tbody></table>";

      }else {
        $salida = 'No Se Encontraron Datos...';
      }
      echo ($salida);
  }

  //Funcion para traer un dato de la tabla
  public function read($id, $con){

    $respuesta = array();

    $sql = "SELECT * FROM bieibkr3va1akfouugbz.doctores WHERE id = '$id';";

    $resultado = mysqli_query($con,$sql);

    if (mysqli_num_rows($resultado) > 0) {

      while ($row = mysqli_fetch_array($resultado)) {

        $respuesta['id'] = $row['id'];
        $respuesta['name'] = $row['name'];
        $respuesta['email'] = $row['email'];
        $respuesta['direccion'] = $row['direccion'];
        $respuesta['ciudad'] = $row['ciudad'];

      }
    }else {
    }
    return $respuesta;
  }

  public function register($data, $con){
    $name = $data['name'];
    $email = $data['email'];
    $pass = $data['pass'];

    $sql = "INSERT INTO `bieibkr3va1akfouugbz`.`users` (`id`,`name`,`email`,`pass`,`status`) VALUES (NULL, '$name', '$email', '$pass', 0);";
  
    $resultado = mysqli_query($con,$sql);

    if ($resultado) {
      return true;
    } else {
      return false;
    }
  }

  public function logout($data, $con){
    $name = $data['name'];
    $pass = $data['pass'];

    $sql = "SELECT u.name, u.pass FROM `bieibkr3va1akfouugbz`.`users` AS u WHERE u.name = '$name' AND u.pass = '$pass'";

    $resultado = mysqli_query($con,$sql);

    if ($resultado) {
      return true;
    }else {
      return false;
    }
  }

}
?>
