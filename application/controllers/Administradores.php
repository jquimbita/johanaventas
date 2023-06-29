<?php

  class Administradores extends CI_Controller
  {

    function __construct()
    {
       parent::__construct();
       //cargar modelo
       $this->load->model('Administrador');
    }
    //funciones que reenderiza a vista listado
    public function listado()
    {
      $data['administradores']=$this->Administrador->obtenerTodos();
      $this->load->view('header');
      $this->load->view('administradores/listado',$data);
      $this->load->view('footer');
    }
    //funciones que reenderiza a vista nuevo
    public function nuevo()
    {
      $this->load->view('header');
      $this->load->view('administradores/nuevo');
      $this->load->view('footer');
    }
    public function guardar(){
              $datosNuevoAdministrador=array(
                "cedula_adm"=>$this->input->post('cedula_adm'),
                "primer_apellido_adm"=>$this->input->post('primer_apellido_adm'),
                "segundo_apellido_adm"=>$this->input->post('segundo_apellido_adm'),
                "nombres_adm"=>$this->input->post('nombres_adm'),
                "direccion_adm"=>$this->input->post('direccion_adm'),
                "latitud_adm"=>$this->input->post('latitud_adm'),
                "longitud_adm"=>$this->input->post('longitud_adm')
              );
              if($this->Administrador->insertar($datosNuevoAdministrador)){
              redirect ('administradores/listado');
            }else {
              "<h1> ERROR AL INSERTAR</h1>";
        }
    }
      // funcion para eliminar instructores
      public function eliminar($id_adm){
        if ($this->Administrador->borrar($id_adm)){//invocando al modelo
          redirect('administradores/listado');
        } else {
          echo "ERROR AL BORRAR :(";
        }

      }
      //function renderizar vista editar con el instructor
      public function editar($id_adm){
        $data["administradorEditar"]=$this->Administrador->obtenerPorId($id_adm);
        $this->load->view('header');
        $this->load->view('administradores/editar',$data);
        $this->load->view('footer');
      }
  }//cierre de clase

 ?>
