<?php

class Session
{
  function __construct()
  {
    
  }

  function connectionSession()
  {
    if (!isset($_SESSION)) {
    session_start();
    } else {
      if(isset($_SESSION['name'])){
        $this->view->render('main/index');
      }
    }



    // if (isset($_SESSION['idUser'])) {
    //   // ----> hacia el dashboard o hacia el main
    // } else {
    //   echo 'Desconectado';

    //   echo "<script>
    //     alert('Redireccionando, no esta autenticado');
    //     window.location = 'login';
    //   </script>";
    // }
  }

  function isAuthenticated()
  {
    if (isset($_SESSION['id'])) {
      return true;
    } else {
      return false;
    }
  }
}

?>