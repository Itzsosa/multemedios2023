<?php

class Main extends Controller
{
  function __construct()
  {
    parent::__construct();
    parent::connectionSession();
    $this->view->mensaje = "";
    $this->view->mensajeResultado = "";
    // $this->view->render('main/index');

    
  }

  function render()
  {
    $this->view->render('main/index');
  }
}

?>