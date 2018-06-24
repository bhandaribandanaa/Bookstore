<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_model extends CI_Model {
	public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        
         public function insert_slider($filename){
            $data['slider_text']= $this->input->post('slider_text');
            $data['image']= $filename;
 			return $this->db->insert('slider',$data);
        }
        public function view_slider(){
           $query = $this->db->get("slider");
            return $query->result();        
            
        }
	   public function delete_slider($id){
            $this->db->where('id',$id);
            $this->db->delete('slider');
            return true;
        }
        public function edit_slider($id){ 
             $this->db->where('id',$id);
             $query=$this->db->get('slider');
             $data['records']=$query->row();
             return $data;
        }

        public function update_slider($filename){
            $id=$this->input->post('id');
            $data['slider_text'] =$this->input->post('slider_text');
            $data['image'] = $filename;
            $this->db->where('id',$id);
            return $this->db->update('slider', $data);
        }  
    }
?>
