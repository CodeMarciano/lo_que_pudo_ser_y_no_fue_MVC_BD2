<?php 

    namespace Login;

    class Controller  
    {
        function __construct(){
            $this->model = new Login();
        }

        public function login(){
            include('./Login/Views/Form.php');
        }

        public function verify($formData){
            $data = $this->model->verifyLogin($formData['usuario'], $formData['contrasenia']);

        }
    }

?>