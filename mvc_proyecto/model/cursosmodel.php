<?php

include_once "class/cursos.php";

class CursosModel extends Model
{
  public function __construct(){
    parent::__construct();
  }

  public function getCursos(){
    $items = [];

    try {

      $stringSQL = "SELECT * FROM `curso` order by id DESC";
      $query = $this->db->connect()->query($stringSQL);

      while ($row = $query->fetch()) { //obtiene todas las filas de la consulta
        $item = new classCursos();
        foreach ($row as $key => $value) {
          # code..
          $item->$key = $value; //asigna los valores a la variable $item
        }
        array_push($items, $item);
      }
      return $items;
    } catch (PDOException $e) {
      return [];
    }
  }

  public function insertarCurso($datos){
    //insertar datos
    try {
      //code
      $datos['id']="0";
      $datos['usuario']="Itzsosa";
      //INSERT INTO curso(id, nombre, descripcion, tiempo, usuario) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
      $stringSQL = 'INSERT INTO curso(id, nombre, descripcion, tiempo, usuario) VALUES (:id,:nombre,:descripcion,:tiempo,:usuario)';
      $query = $this->db->connect()->prepare($stringSQL);
      $query->execute($datos);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }

  public function verCursos($id){
    try {
      $item = new classCursos();
      $stringSQL = "SELECT * FROM `curso` where id=:id;";
      $query = $this->db->connect()->prepare($stringSQL);
      $query->execute(['id'=>$id]);
      while ($row = $query->fetch()) { //obtiene la fila de la consulta
        
        foreach ($row as $key => $value) {
          # code..
          $item->$key = $value; //asigna los valores a la variable $item
        }
      }
      return $item;
    } catch (PDOException $e) {
      return [];
    }
  }

  public function actualizarcurso($datos){
    //actualizar datos
    try {
      //code
      //$datos['usuario']="Itzsosa";
      //UPDATE curso SET nombre=:nombre,descripcion=:descripcion,tiempo=:tiempo,usuario=:usuario WHERE id=:id ;';
      $stringSQL = 'UPDATE curso SET nombre=:nombre,descripcion=:descripcion,tiempo=:tiempo WHERE id=:id ;';
      $query = $this->db->connect()->prepare($stringSQL);
      $query->execute($datos);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }

  //elminarcurso
  public function eliminarcurso($id){

    try {
      $stringSQL = "DELETE FROM `curso` WHERE id =:id;";
      $query = $this->db->connect()->prepare($stringSQL);
      $query->execute(['id'=>$id]);
      return true;
    } catch (PDOException $e) {
      return [];
    }
  }
}
?>