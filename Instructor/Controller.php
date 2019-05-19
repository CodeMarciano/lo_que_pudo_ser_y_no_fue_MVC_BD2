<?php

namespace Instructor;

class Controller{

    function __construct(){
        $this->model = new Instructor();
    }

    public  function index(){
        $data = $this->model->getAll();//metodo getAll se debe construir mas despues

        echo "<pre>";
        print_r($data);
        
        return "instructor.index";
    }

    public function show($id){
        $data = $this->model->getData($id);
        echo "<pre>";
        print_r($data);
        return "instructor.show";
    }

    public function create(){
        include('./Instructor/Views/Form.php');
        return "instructor.create";
    }

    public function store(array $formData){
        // echo "<pre>";
        // print_r($formData);
        $id = $this->model->add($formData);
        var_dump($id);
        // header("location: ".\Config::webRoot."/instructor/$id");
        // die();
        return "instructor.store";
    }

    public function edit(){
        return "instructor.edit";
    }

    public function update(){
        return "instructor.update";     
    }

    public function delete(){
        return "instructor.delete";
    }
}
