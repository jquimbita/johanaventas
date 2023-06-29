<?php

class Administrador extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  //funcion para insertar un instructor
  function insertar($datos)
  {
    return $this->db->insert("administrador",$datos);
  }
  //Funcion que reenderizala viksta index
  function obtenerTodos(){
    $listadoAdministradores=$this->db->get("administrador");
    if($listadoAdministradores->num_rows()>0){
      return $listadoAdministradores->result();
    }else {
      return false;
    }
  }
   //borrar instructores
    function borrar($id_adm){
      $this->db->where("id_adm",$id_adm);
      return $this->db->delete("administrador");
    }
    //funcion para consultar un instructor especifico
    function obtenerPorId($id_adm)
    {
      $this->db->where("id_adm",$id_adm);
      $instructor=$this->db->get('administrador');
      if($instructor->num_rows()>0){
        return $instructor->row();
      }
      return false;
    }
    //funcion para actualizar un instructore
    function actualizar($id_adm,$datos){
      $this->db->where("id_adm",$id_adm);
      return $this->db->update('administrador',$datos);
    }
}//no borrar cierre de la clase

 ?>
