<?php
    class Productos extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Producto');
        }
        public function nuevoPEDI(){
          	$this->load->view('header');
            $this->load->view('productos/nuevoPEDI');
            $this->load->view('footer');
          }
        public function indexPEDI(){
            $data['productos']=$this->Producto->obtenerTodos();
            $this->load->view('header');
            $this->load->view('productos/indexPEDI',$data);
            $this->load->view('footer');
          }
          public function guardar(){
            $datosNuevoProducto=array(
              "nombres_pro"=>$this->input->post('nombres_pro'),
              "cantidad_pro"=>$this->input->post('cantidad_pro'),
              "codigo_pro"=>$this->input->post('codigo_pro'),
              "pago_pro"=>$this->input->post('pago_pro')
              );
              if ($this->Producto->insertar($datosNuevoProducto)) {
                $this->session->set_flashdata("confirmacion","Producto guardado exitosamente");
              }else {
                $this->session->set_flashdata("error","Error al guardar intenten nuevamente");
              }
              redirect('productos/indexPEDI');
        }
        //funcion para eliminar instructores
        public function eliminar($id_pro){
          if($this->session->userdata("conectado")->perfil_usu!="ADMINISTRADOR"){
            $this->session->set_flashdata("error","No tiene permisos para eliminar");
            redirect("productos/indexPEDI");
}
          if ($this->Producto->borrar($id_pro))
          {//invocando el modelo
            $this->session->set_flashdata("confirmacion","Producto eliminado exitosamente");
          }else{
            $this->session->set_flashdata("error","Error al eliminar intenten nuevamente");
          }
            redirect('productos/indexPEDI');
        }
        //funcion renderiza vista editar con el instructor
        public function editar($id_pro){
          $data["productoEditar"]=$this->Producto->obtenerPorId($id_pro);
          $this->load->view('header');
          $this->load->view('productoss/editar',$data);
          $this->load->view('footer');
        }

        public function procesarActualizacion($value='')
        {
          $datosEditados=array(
            "nombres_pro"=>$this->input->post('nombres_pro'),
            "cantidad_pro"=>$this->input->post('cantidad_pro'),
            "codigo_pro"=>$this->input->post('codigo_pro'),
            "pago_pro"=>$this->input->post('pago_pro')
            );
          $id_pro=$this->input->post("id_pro");
          if ($this->Producto->actualizar($id_pro,$datosEditados)) {
            $this->session->set_flashdata("confirmacion","Producto actualizado exitosamente");
          }else {
            $this->session->set_flashdata("error","Error al editar intenten nuevamente");
          }
          redirect("productos/indexPEDI");
        }
    }//cierre de la clases
?>
