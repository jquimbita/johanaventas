<?php
    class Clientes extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Cliente');
        }
        public function nuevoC(){
          	$this->load->view('header');
            $this->load->view('clientes/nuevoC');
            $this->load->view('footer');
          }
        public function indexC(){
            $data['clientes']=$this->Cliente->obtenerTodos();
            $this->load->view('header');
            $this->load->view('clientes/indexC',$data);
            $this->load->view('footer');
          }

          public function guardar(){
            $datosNuevoCliente=array(
              "cedula_cli"=>$this->input->post('cedula_cli'),
              "apellidos_cli"=>$this->input->post('apellidos_cli'),
              "nombres_cli"=>$this->input->post('nombres_cli'),
              "telefono_cli"=>$this->input->post('telefono_cli'),
              "correo_cli"=>$this->input->post('correo_cli'),
              "latitud_cli"=>$this->input->post('latitud_cli'),
              "longitud_cli"=>$this->input->post('longitud_cli')
              );
              if ($this->Cliente->insertar($datosNuevoCliente)) {
                $this->session->set_flashdata("confirmacion","Cliente guardado exitosamente");
              }else {
                $this->session->set_flashdata("error","Error al guardar intenten nuevamente");
              }
              redirect('clientes/indexC');
        }
        //funcion para eliminar instructores
        public function eliminar($id_cli){
          if($this->session->userdata("conectado")->perfil_usu!="ADMINISTRADOR"){
            $this->session->set_flashdata("error","No tiene permisos para eliminar");
            redirect("clientes/indexC");
          }
          if ($this->Cliente->borrar($id_cli))
          {//invocando el modelo
            $this->session->set_flashdata("confirmacion","Cliente eliminado exitosamente");
          }else{
            $this->session->set_flashdata("error","Error al eliminar intenten nuevamente");
          }
            redirect('clientes/indexC');
        }
        //funcion renderiza vista editar con el instructor
        public function editar($id_cli){
          $data["clienteEditar"]=$this->Cliente->obtenerPorId($id_cli);
          $this->load->view('header');
          $this->load->view('clientes/editar',$data);
          $this->load->view('footer');
        }

        public function procesarActualizacion($value='')
        {
          $datosEditados=array(
            "cedula_cli"=>$this->input->post('cedula_cli'),
            "apellidos_cli"=>$this->input->post('apellidos_cli'),
            "nombres_cli"=>$this->input->post('nombres_cli'),
            "telefono_cli"=>$this->input->post('telefono_cli'),
            "correo_cli"=>$this->input->post('correo_cli'),
            "latitud_cli"=>$this->input->post('latitud_cli'),
            "longitud_cli"=>$this->input->post('longitud_cli')
            );
          $id_cli=$this->input->post("id_cli");
          if ($this->Cliente->actualizar($id_cli,$datosEditados)) {
            $this->session->set_flashdata("confirmacion","Cliente actualizado exitosamente");
          }else {
            $this->session->set_flashdata("error","Error al editar intenten nuevamente");
          }
          redirect("clientes/indexC");
        }

    }//cierre de la clases

?>
