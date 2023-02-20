<?php
  require 'Database.php';

  class Pet extends Database{

    public function create($mascota){
      $sql = "INSERT INTO mascota (nombre, descripcion) VALUES('".$mascota->name."', '".$mascota->description."')";
      $stmt = $this->executeStatment($sql);
      return $stmt;
    }

    public function getAll(){
      $sql = "SELECT * FROM mascota";
      $result = $this->query($sql);
      return $result;
    }

    public function getOne($id){
      $sql = "SELECT * FROM mascota WHERE id=".$id;
      $result = $this->query($sql);
      return $result;
    }

    public function update($id, $mascota){
      $sql = "UPDATE mascota SET nombre='".$mascota->name."', descripcion='".$mascota->description."' WHERE id=".$id;
      $stmt = $this->executeStatment($sql);
      return $stmt;
    }

    public function delete($id){
      $sql = "DELETE FROM mascota WHERE id=".$id;
      $stmt = $this->executeStatment($sql);
      return $stmt;
    }
  }
?>
