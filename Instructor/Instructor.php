<?php

namespace Instructor;

class Instructor{
    
    protected $db;

    function __construct(){
        global $db;
        $this->db = $db;
    }
    
    function add(array $data){
\Helper::print($data);
        $sql =  "
                INSERT INTO instructor(ciInstructor,idRol,primerNombre,apellidoPaterno,direccion,numeroCelular,genero,fechaNacimiento,usuario,contrasenia,activo)
                VALUES (:ciInstructor,:idRol,:primerNombre,:apellidoPaterno,:direccion,:numeroCelular,:genero,:fechaNacimiento,:usuario,:contrasenia,:activo);
                ";

        $sql =  "
        INSERT INTO instructor(ciInstructor,idRol,primerNombre)
        VALUES (:ciInstructor,:idRol,:primerNombre);
        ";
        $stm = $this->db->prepare($sql);

        //Se Hara Un For each para que los recorra y los almacene en un arrary
        foreach ($data as $key=>&$value){ 
            $stm->bindParam(":".$key,$value);
        }
        $stm->execute();
        return $this->db->lastInsertId();
    }

    function getAll(){
        $sql = "SELECT * FROM instructor";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    function getData($id){
        $sql = "SELECT * FROM instructor WHERE  idRol = $id";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }
}
