<?php

namespace Student;

class Student{
    
    protected $db;

    function __construct(){
        global $db;
        $this->db = $db;
    }

    function add(array $data){
        // hacer SQL y guarda data return id
        $sql = "
            INSERT INTO estudiante(ciEstudiante,primerNombre,segundoNombre, apellidoPaterno,apellidoMaterno,direccion,numeroCelular,genero,fechaNacimiento,activo) 
            VALUES (:ciEstudiante,:primerNombre,:segundoNombre, :apellidoPaterno,:apellidoMaterno,:direccion,:numeroCelular,:genero,:fechaNacimiento,:activo);";
        $stm = $this->db->prepare($sql);

        foreach ($data as $key=>&$value){
            $stm->bindParam(":".$key,$value);
        }
        $stm->execute();
        return $this->db->lastInsertId();
    }
     
    
    function getAll(){
        $sql = "SELECT * FROM estudiante";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    function getData($id){
        $sql = "SELECT * FROM estudiante WHERE  idEstudiante = $id";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    
}