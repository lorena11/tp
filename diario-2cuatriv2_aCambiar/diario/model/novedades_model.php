<?php

  class novedadModel
  {

    private $novedad;
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=adcdata;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function agregarNovedad($nombre,$categoria){
      $id_cat = $this->buscarId($categoria);
      $consulta = $this->db->prepare('INSERT INTO novedades(nombre,idCategoria) VALUES (?,?)');
      $consulta->execute(array($nombre,$id_cat));
    }

    public function getNovedades(){
      $novedades = array();
      $consulta = $this->db->prepare('SELECT * FROM novedades');
      $consulta->execute();
      $id=2;

      while ($novedad = $consulta->fetch())
      {
        $novedades[$id]['idNovedad'] = $novedad['idNovedad'];
        $novedades[$id]['nombre'] = $novedad['nombre'];

        $novedades[$id]['idCategoria'] = $novedad['idCategoria'];
        $id++;
      }
      return $novedades;
    }

    private function buscarId($nombreCat)
    {
      $consulta = $this->db->prepare('SELECT * FROM categorias');
      $consulta->execute();
      while ($categoria = $consulta->fetch()){
        if ($categoria['nombre'] = $nombreCat) {
          return $categoria['idCategoria'];
        }
      }
    }


    public function borrarNovedad($idNovedad){
      $consulta = $this->db->prepare('DELETE FROM novedades WHERE idNovedad=?');
      $consulta->execute(array($idNovedad));
    }

  }

?>
