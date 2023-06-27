<?php

class App
{
  function __construct()
  {

    $url = isset($_GET['url']) ? $_GET['url'] : null;

    $url = rtrim($url, '/');

    $url = explode('/', $url);

    //pagina/admin/create
    //0 pagina/1 admin/ 2 funcion

    if (empty($url[0])) {
      $fileController = 'controller/main.php';
      require_once $fileController;
      $controller = new Main();
      $controller->loadModel('main');
      $controller->render();
      return false;
    }

    $archivoController = 'controller/' . $url[0] . '.php';

    if (file_exists($archivoController)) {
      require_once $archivoController;

      $controller = new $url[0]();
      $controller->loadModel($url[0]);

      //id=1,nombre=mario,apellido=lopez,correo=mario@ucr.ac.cr
      //1,mario,lopez,mario@ucr.ac.cr

      $nparam = sizeof($url); //obtengo cuantos elementos tiene la url

      //viene con funcion
      if ($nparam > 1) {
        //viene con funcion y parametros
        if ($nparam > 2) {
          $param = [];
          for ($i = 2; $i < $nparam; $i++) {
            array_push($param, $url[$i]);
          }
          //pagina/consultar/1/mario


          $controller->{$url[1]}($param);
        } else {
          $controller->{$url[1]}();
        }
      } //sin funcion
      else {
        $controller->render();
      }

    } else {
      require_once 'controller/error.php';
      $controller = new Errores();
    }
  }
}
?>