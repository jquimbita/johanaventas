<?php
class Cliente extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  //funcion para insertar un instructor un instructor en mysql
  function insertar($datos){

  return $this->db->insert("cliente",$datos);
  }
  //FUNCION para renderizar la vista
  function obtenerTodos(){
    $listadoClientes=$this->db->get("cliente");
    if($listadoClientes->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoClientes->result();
    }else {
      return false;
    }
  }
  //BORRAR Instructores
  function borrar($id_cli){
    //DELTE FROM INSTRUCTOR WHERE id_ins
    $this->db->where("id_cli",$id_cli);
      return $this->db->delete('cliente');
    }
    //funcion para consultar un instructor
    function obtenerPorId($id_cli)
    {
      $this->db->where("id_cli",$id_cli);
      $cliente=$this->db->get('cliente');
      if($cliente->num_rows()>0){
        return $cliente->row();
      }
      return false;
    }
  // function obtenercli(){
  //   $listadoClientes=$this->db->get("cliente");
  //   if($listadoClientes->num_rows()>0){//SI HAY DATOOOOOS
  //     return $listadoClientes->result();
  //   }else {
  //     return false;
  //   }
  // }
    //funcion para consultar un instructor especifico
    //funcion para actualizar un instructore
    function actualizar($id_cli,$datos){
      $this->db->where("id_cli",$id_cli);
      return $this->db->update('cliente',$datos);
    }


}//cierre de la clase
 ?>
