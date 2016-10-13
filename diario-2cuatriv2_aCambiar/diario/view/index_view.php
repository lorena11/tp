<?php
  include_once 'libs/Smarty.class.php';

  class IndexView {
      private $smarty;
      private $errores;


      function __construct(){
        $this->smarty = new Smarty();
        $this->errores = array();
      }

      function mostrarIndex(){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->display('index.tpl');
      }

      public function mostrarTPL($contenido,$categoria,$novedad)
      {
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('categorias', $categoria);
        $this->smarty->assign('novedades', $novedad);
        return $this->smarty->fetch($contenido);
      }

      function mostrarError($error){
        array_push($this->errores, $error);
      }

  }
?>
