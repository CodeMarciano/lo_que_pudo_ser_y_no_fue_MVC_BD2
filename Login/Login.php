<?php

    namespace Login;
    
    class Login
    {
        protected $db;

        function __construct(){
            global $db;
            $this->db = $db;
        }

        function verifyLogin($user, $password){
            $passwd = sha1($password);
            //\Helper::print($user);
            //\Helper::print($passwd);
            $sql = 'SELECT * FROM usuario WHERE usuario = :user AND contrasenia = :passwd';
            $stm = $this->db->prepare($sql);
            $stm->bindParam(":user",$user);
            $stm->bindParam(":passwd",$passwd);
            $stm->execute();
            $data = $stm->fetchAll(\PDO::FETCH_ASSOC);//ahi estan los todos los datos en las pociones
            //\Helper::print($data); //este helper muestra en la pantalla lo que se agrego en array
            if (count($data) == 1) {
                header("location: ".\Config::webRoot."/instructor/create");
                die();
                //echo "correct";
                return $data[0];
            } else if (count($data) > 1) {
                echo "ERROR en BD";
                throw new Exception("ERROR en BD");
            } else {
                echo "incorrect";
                return false;
            }
          // si tengo record
          // sin records - malo login o contrasena 
        }
        // para cuado creas una nueva clase hacer "composer dumpautoload" o
        // o cuado no encuentra el archivo.php o el metodo
        function verifyPemits(){
            
        }
    }
?>