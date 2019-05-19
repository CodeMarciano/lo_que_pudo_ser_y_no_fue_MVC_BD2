<?php
    require_once ('vendor/autoload.php');
    require_once ('Connection.php');

    if(!empty($_GET['namespace']) && !empty($_GET['method'])){
        $namespace = ucfirst($_GET['namespace']);
        $controllerName = $namespace."\\Controller";
        $method = $_GET['method'];

        if(class_exists($controllerName) && method_exists($controllerName, $method)){
            $controller = new $controllerName();

            if(!empty($_POST))
                echo $controller->$method($_POST);
            else if(!empty($_GET['id']))
                echo $controller->$method((int)$_GET['id']);
            else
                echo $controller->$method();
        }else{
            echo "404";
        }
    }

?>