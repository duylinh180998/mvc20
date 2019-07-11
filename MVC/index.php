<?php

$controller=isset($_GET['controller'])?$_GET['controller']:'book';

$action=isset($_GET['action'])?$_GET['action']:'index';

//echo $controller."$action";
$controller=ucfirst($controller);
$controller=$controller."Controller";
$pathController="controllers/$controller.php";
echo $controller;
if (!file_exists($pathController)){
    die("Trang ko ton tai");
}
require_once $pathController;
$object=new $controller;
if (!method_exists($object,$action)){
    die("Phuong thuc ko ton tai");
}
$object->$action();