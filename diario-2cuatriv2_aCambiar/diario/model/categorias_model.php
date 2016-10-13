<?php

  class categoriaModel
  {

    private $categoria;
    private $db;

    public function __construct()
    {
      $this->db = new PDO('mysql:host=localhost;dbname=adcdata;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getCategoria(){
      $categorias = array();
      $consulta = $this->db->prepare("SELECT * FROM categorias");
      $consulta->execute();

      $nombre = '';
      $id=0;
      while ($categoria = $consulta->fetch()){
        $categorias[$id]['idCategoria'] = $categoria['id'];
        $categorias[$id]['nombre'] = $categoria ['nombre'];

        $id++;
      }
      return $categorias;
    }


    /*private function subirArchivos($archivos){
      $destino = 'images/' . uniqid() . $archivos['name'][0];
      move_uploaded_file($archivos['tmp_name'][0], $destino);
      return $destino;
    }*/




    function agregarCategoria($categoria){
      //$ruta = $this->subirArchivos($files);
      $consulta = $this->db->prepare('INSERT INTO categorias(nombre) VALUES(?)');
      //$consulta->execute(array($categoria,$ruta));
      $consulta->execute(array($categoria));
    }

    function borrarCategoria($categoria){
      $consulta = $this->db->prepare('DELETE FROM categorias WHERE id=?');
      $consulta->execute(array($categoria));
    }

  }

?>
