<?php

namespace Student;

class Controller{

    function __construct(){
        // llamar model (guardar en $this->model)
        $this->model = new Student();
    }

    public function index(){
        // recojer data de model
        $data = $this->model->getAll();

        // llamar vista y enviar data
        // $view = $this->getView('student.lista',$data);

        // devolver vista con datas
        // return $view;

        echo "<pre>";
        print_r($data);

        return "Student.index: ";
    }

    public function show($id){
//        $data
        $data = $this->model->getData($id);
        echo "<pre>";
        print_r($data);
    }

    public function create(){
        include('./Student/Views/Form.php');
    }

    public function store(array $formData){
//        echo "<pre>";
//        print_r($formData);
        $id = $this->model->add($formData); 
//        return "Student.store ".$id;
        header("location: ".\Config::webRoot."/student/$id");
        die();
    }

    public function edit($id){
        return "Student.edit $id";
    }

    public function update(array $formData){
        return "Student.update";
    }

    public function delete($id){
        return "Student.delete $id";
    }
}