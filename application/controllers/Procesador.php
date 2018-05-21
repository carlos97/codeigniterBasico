<?php
class Procesador extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('ruta');
        //Funciones de redirección
        $this->load->helper('url');
    }
    
    public function index(){
        $data = array();
        
        $data['rutas'] = $this->ruta-> obtenerListado();
        $data['titulo'] = 'Mis Rutas';
        
        $this->load->view('formulario', $data);
        
    }
    
    public function agregar(){
        $data = array();
        $datosFormulario = array();
        
        if($this->input->post('postSubmit')){
            
            $datosFormulario = array(
                'nombre' => $this->input->post('nombre')
            );
            
            $insertar = $this->ruta->insertarRuta($datosFormulario);
            if($insertar){
                $this->session->set_userdata('success_msg', 'Se insertó la ruta.');
                redirect('/Procesador');
            }else{
                $data['error_msg'] = 'No se pudo insertar la ruta.';
            }
           
        }
        
        $data['post'] = $datosFormulario;
        $data['title'] = 'Crear Ruta';
        $data['action'] = 'agregar';
        
        $this->load->view('rutas/agregar', $data);
        
    }
     
}
