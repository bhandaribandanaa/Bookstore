<?php 
defined('BASEPATH') OR exit('No direct scipt access allowed');

class Bookdetail_model extends CI_Model{
	

	public function insert_detail($filename){
		$data['isbn']=$this->input->post('isbn');
		$data['book_title']=$this->input->post('book_title');
		$data['cat_id']=$this->input->post('category');
		$data['subcat_id']=$this->input->post('subcategory');
		$data['book_author']=$this->input->post('book_author');
		$data['book_publisher']=$this->input->post('book_publisher');
		$data['book_stock']=$this->input->post('book_stock');
		$data['publication_date']=$this->input->post('publication_date');
		$data['description']=$this->input->post('description');
		$data['image']=$filename;
		$data['price']=$this->input->post('price');
		return $this->db->insert('book_detail',$data);
	}
	public function view_detail(){
		$query=$this->db->get("book_detail");
		return $query->result();
	}
	public function get_book(){
		$query=$this->db->get_where('book_detail',array('book_id' => $id));
		return $query->row_array();

	}
	public function delete_detail($book_id)
	{
		$this->db->where('book_id',$book_id);
		$this->db->delete('book_detail');
		return true;
	}

	public function edit_detail($book_id)
	{
		$query=$this->db->get_where("book_detail",array('book_id' => $book_id));
		$data['records']=$query->row();
		return $data;
	}
	public function update_detail($filename)
	{
		$book_id=$this->input->post('book_id');
		$data['isbn']=$this->input->post('isbn');
		$data['book_title']=$this->input->post('book_title');
		$data['cat_id']=$this->input->post('category');
		$data['subcat_id']=$this->input->post('subcategory');
		$data['book_author']=$this->input->post('book_author');
		$data['book_publisher']=$this->input->post('book_publisher');
		$data['book_stock']=$this->input->post('book_stock');
		$data['publication_date']=$this->input->post('publication_date');
		$data['description']=$this->input->post('description');
		$data['image']=$filename;
		$data['price']=$this->input->post('price');
		$this->db->where('book_id',$book_id);
		return $this->db->update('book_detail', $data);
	}

}