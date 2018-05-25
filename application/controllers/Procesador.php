<?php
class Procesador extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Estacion');
        //Funciones de redirección
        $this->load->helper('url');
    }
    
    public function index(){
        $data = array();
        
        $data['estacion'] = $this->Estacion-> obtenerListado();
        $data['titulo'] = 'Mis estaciones';
        
        $this->load->view('formulario', $data);
        
    }
    
    public function agregarEstacion(){
        $data = array();
        $datosFormulario = array();
        
        if($this->input->post('postSubmit')){
            
            $datosFormulario = array(
                'nombre' => $this->input->post('nombre'),
                'latitud' => $this->input->post('latitud'),
                'longitud' => $this->input->post('longitud'),
                'ruta' => $this->input->post('codigoRuta')
            );
            
            $insertar = $this->Estacion->insertar($datosFormulario);
            if($insertar){
                $this->session->set_userdata('success_msg', 'Se insertó la estacion.');
                redirect('/Procesador');
            }else{
                $data['error_msg'] = 'No se pudo insertar la estacion.';
            }
           
        }
        
        $data['post'] = $datosFormulario;
        $data['title'] = 'Crear estacion';
        $data['action'] = 'agregar';
        
        $this->load->view('agregarEstacion', $data);
        
    }
    

    public function actualizar($id){
        $data = array();
        $datosFormulario = array();
        
        if($this->input->post('postSubmit')){
            
            $datosFormulario = array(
                'nombre' => $this->input->post('nombre'),
                'latitud' => $this->input->post('latitud'),
                'longitud' => $this->input->post('longitud'),
                'ruta' => $this->input->post('codigoRuta')
            );
            
            $insertar = $this->Estacion->actualizar($datosFormulario,$id);
            if($insertar){
                $this->session->set_userdata('success_msg', 'Se actualizó la ruta.');
                redirect('/Procesador');
            }else{
                $data['error_msg'] = 'No se pudo actualizar la ruta.';
            }
           
        }
        
        $data['title'] = 'actualizar Ruta';
        $data['action'] = 'actualizar';
        $data['estacion'] = $this->Estacion-> obtenerListado($id);
        $this->load->view('ActualizarEstacion', $data);
        
    }
    
    public function eliminar($id=""){
            
        $this->Estacion->eliminar($id);
 
        $data['estacion'] = $this->Estacion-> obtenerListado();
        $this->load->view('formulario', $data);
        
    }
     
}
