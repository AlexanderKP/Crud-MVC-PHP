<?php
$controller="Home";
require_once "Config/Conexion.php";
if(!isset($_REQUEST["c"])){
    require_once "Controllers/".$controller."Controller.php";
    $controller= $controller."Controller";
    $controller= new $controller();
    $controller->index();
}else{
    $controller=$_REQUEST["c"];
    require_once "Controllers/".$controller."Controller.php";
    $controller= $controller."Controller";
        $controller= new $controller();
    if(!isset($_REQUEST["a"])){
        $controller->index();
    }else{
        $accion=$_REQUEST["a"];
        call_user_func(array($controller, $accion));
    }
}
