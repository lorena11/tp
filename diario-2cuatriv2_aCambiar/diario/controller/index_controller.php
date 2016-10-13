<?php
  include_once 'view/index_view.php';
  include_once 'model/novedades_model.php';
  include_once 'model/categorias_model.php';

  class IndexController
  {

    private $view;
    private $model;
    private $modelp;

    function __construct()
    {
      $this->view = new IndexView();
      $this->model = new categoriaModel();
      $this->modelp = new novedadModel();
    }

    public function MostrasIndex()
    {
      $this->view->mostrarIndex();
    }

    function RetornarContenido($contenido)
    {
      $ruta = "templates/" . $contenido . ".tpl";
      return $this->view->mostrarTPL($ruta,$this->model->getCategoria(),$this->modelp->getNovedades());
    }

    public function agregarCategoria()
    {
      if(isset($_REQUEST['category']) && ($_REQUEST['category'] != '') ){
          $this->model->agregarCategoria($_REQUEST['category'] );
        }
      $this->MostrasIndex();
    }

    function borrarCategoria(){
      if(isset($_REQUEST['category'])){
        $this->model->borrarCategoria($_REQUEST['category']);
      }
      $this->MostrasIndex();
    }

    function agregarNovedad()
    {
      if(isset($_REQUEST['idNovedad'])&&($_REQUEST['idNovedad'] != '')){
        $this->modelp->agregarNovedad($_REQUEST['idNovedad'], $_REQUEST['idCategoria']);
      }
      else{
        $this->view->mostrarError('El novedad que intenta agregar esta vacio');
      }
      $this->MostrasIndex();
    }




    function borrarNovedad(){
      if(isset($_REQUEST['idNovedad'])){
        $this->modelp->borrarNovedad($_REQUEST['idNovedad']);
      }
      else{
        $this->view->mostrarError('El evento que intenta borrar no existe');
      }
      $this->MostrasIndex();
    }

  }

?>
