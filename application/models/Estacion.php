<?php
class Estacion extends CI_Model{
    
    function obtenerListado($id =""){
        $query="";
        if($id!=""){
            $this->db->where('id', $id);
            $query = $this->db->get('estacion');
        }else{
            $query = $this->db->get('estacion');
        }
        return $query->result_array();
    }
    
    public function insertar($data = array()) {
        
        $data['id']='NULL';
        $insertar = $this->db->insert('estacion', $data);
        
        if($insertar){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
    function actualizar($data = array(),$id){
        $this->db->where('id', $id);
        $actualizar = $this->db->update('estacion', $data);
        
        if($actualizar){
            return true;
        }else{
            return false;
        }
    }
    
    function eliminar($id){
        $this->db->where('id', $id);
        $this->db->delete('estacion');
    }
    
}