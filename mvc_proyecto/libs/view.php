<?php
//clase que permite 
//redireccionar entre las vistas
class view
{
  function __construct()
  {

  }

  function render($nombre)
  {
    require 'view/' . $nombre . '.php';
  }
}

?>