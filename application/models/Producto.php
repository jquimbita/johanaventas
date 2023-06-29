<?php
class Producto extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  //funcion para insertar un instructor un instructor en mysql
  function insertar($datos){

  return $this->db->insert("producto",$datos);
  }
  //FUNCION para renderizar la vista
  function obtenerTodos(){
    $listadoProductos=$this->db->get("producto");
    if($listadoProductos->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoProductos->result();
    }else {
      return false;
    }
  }
  //BORRAR Instructores
  function borrar($id_pro){
    //DELTE FROM INSTRUCTOR WHERE id_ins
    $this->db->where("id_pro",$id_pro);
      return $this->db->delete('producto');
    }
    //funcion para consultar un instructor
    function obtenerPorId($id_pro)
    {
      $this->db->where("id_pro",$id_pro);
      $producto=$this->db->get('producto');
      if($producto->num_rows()>0){
        return $producto->row();
      }
      return false;
    }
  // function obtenerPro(){
  //   $listadoProductos=$this->db->get("productos");
  //   if($listadoProductos->num_rows()>0){//SI HAY DATOOOOOS
  //     return $listadoProductos->result();
  //   }else {
  //     return false;
  //   }
  // }
    //funcion para consultar un instructor especifico
    //funcion para actualizar un instructore
    function actualizar($id_pro,$datos){
      $this->db->where("id_pro",$id_pro);
      return $this->db->update('producto',$datos);
    }
}//cierre de la clase
 ?>
