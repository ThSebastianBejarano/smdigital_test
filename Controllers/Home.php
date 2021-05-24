<?php

session_start();

//Controlador Principal de la pagina HOME
class Home extends Controller{

    function __construct(){
      //Llamar Modelo
      $this->datosmodelo = $this->model('Model');
    }

    //Funcion Principal
    function index(){

      if (isset($_SESSION['nombre'])) {
        $data = $this->datosmodelo->get();
        $this->view('index', $data);
      }else {
        $this->view('login');
      }
      
    }

    function salir(){
      session_destroy();
      redireccionar('Home');
    }

    function register(){
      $this->view('register');
    }

    function logout(){
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $datos = [
          'name' => trim($_POST['name']),
          'pass' => trim($_POST['pass'])
        ];

        if ($this->datosmodelo->login($datos)) {
          $_SESSION['nombre'] = $datos['name'];
          redireccionar('Home');
          return true;
        }else {
          die('Algo anda Mal');
          return false;
        }
      }else {
        return false;
      }
    }

    function addUser(){
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = [
          'name' => trim($_POST['name']),
          'email' => trim($_POST['email']),
          'pass' => trim($_POST['pass'])
        ];

        if ($this->datosmodelo->register($data)) {
          redireccionar('index');
        }else {
          die('algo anda mal');
        }
      }
    }

    //Funcion para editar formularios.
    function edit(){
      if (isset($_POST['editdata'])){

        //Guardar datos del formulario que se recogio con el metodo http:POST en un Array
        $info = [
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'direccion' => $_POST['direccion'],
            'ciudad' => $_POST['ciudad'],
        ];

        //Llamar una funcion del modelo
        //comprobar si el valor retornado por la funcion es verdadera
        if ($this->datosmodelo->up($info)) {
        //redirecionar a la pagina principal
         redireccionar('Home');
       }else {
         //Reportar fallo si el valor retornado de la funcion llamada es falsa
         die('Algo anda mal');
       }
     }else {

     }
    }

    //funcioan para asignar nuevos valores a la base de datos
    function add(){

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $datos = [
            'name' => trim($_POST['name']),
            'email' => trim($_POST['email']),
            'direccion' => trim($_POST['direccion']),
            'ciudad' => trim($_POST['ciudad'])
        ];

        if ($this->datosmodelo->add($datos)) {
         redireccionar('Home');
       }else {
         die('Algo anda mal');
       }
     }else {

     }
    }

    //Funcion para eliminar datos
    function delect(){

        if(isset($_POST['deletedata'])){

            $id = $_POST['delete_id'];

            if($this->datosmodelo->del($id)) {
                redireccionar('Home');
              }else {
                die('Algo anda mal');
              }
        }else {
            
        }
    }

    function buscar(){
      if(isset($_POST['consulta'])){
        $q = $_POST['consulta'];

        $data = $this->datosmodelo->buscar($q);

      }
    }

    function exportExcel(){
      $data = $this->datosmodelo->get();
      $this->view('exportExcel',$data);
    }

}


 ?>
