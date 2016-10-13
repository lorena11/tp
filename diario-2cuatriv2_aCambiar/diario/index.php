<?php

  include_once 'config/config_app.php';
  include_once 'controller/index_controller.php';

  if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) || $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
  {
    $indexController = new IndexController();
    $indexController->MostrasIndex();
  }
  else {

    switch ($_REQUEST[ConfigApp::$ACTION])  {
      
      case ConfigApp::$ACTION_NOVEDADES:
        $indexController = new IndexController();
        echo $indexController->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;


      case ConfigApp::$ACTION_CONTACTO:
        $indexController = new IndexController();
        echo $indexController->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_CRUD:
        $indexController = new IndexController();
        echo $indexController->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_CRUD_AGREGAR_CATEGORIA:
        $indexController = new IndexController();
        $indexController->agregarCategoria();
        break;
      case ConfigApp::$ACTION_CRUD_BORRAR_CATEGORIA:
        $indexController = new IndexController();
        $indexController->borrarCategoria();
        break;
      case ConfigApp::$ACTION_CRUD_AGREGAR_NOVEDAD:
        $indexController = new IndexController();
        $indexController->agregarNovedad();
        break;
      case ConfigApp::$ACTION_CRUD_BORRAR_NOVEDAD:
        $indexController = new IndexController();
        $indexController->borrarNovedad();
        break;
      default:
        echo 'Pagina no encontrada';
        break;
    }

  }

?>
