<?php

//Modelo Principal
class Model{

  public $db;

  public function __construct(){
    $this->db = new Conexion();
  }

  public function get(){

    $con = $this->db->connect();
    $resultado = $this->db->readAll($con);
    $this->db->disconnect($con);
    return $resultado;
  }

  public function getData($id){

    $con = $this->db->connect();
    $resultado = $this->db->read($id, $con);
    $this->db->disconnect($con);
    return $resultado;
  }

  public function add($data){

    $con = $this->db->connect();
    $resultado = $this->db->insert($data, $con);
    $this->db->disconnect($con);
    return $resultado;
  }

  public function up($datos){

    $con = $this->db->connect();
    $resultado = $this->db->update($datos,$con);
    $this->db->disconnect($con);
    return $resultado;
  }

  public function del($id){

    $con = $this->db->connect();
    $resultado = $this->db->delete($id,$con);
    $this->db->disconnect($con);
    return $resultado;
  }

  public function buscar($data){

    $con = $this->db->connect();
    $resultado = $this->db->search($data,$con);
    $this->db->disconnect($con);
  }

  public function register($data){

    $con = $this->db->connect();
    $resultado = $this->db->register($data,$con);
    $this->db->disconnect($con);
    return $resultado;
  }

  public function login($data){

    $con = $this->db->connect();
    $resultado = $this->db->logout($data,$con);
    $this->db->disconnect($con);
    return $resultado;
  }

}

 ?>
