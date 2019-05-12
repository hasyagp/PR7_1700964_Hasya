<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	
	public function_construct()
	{
		parent:: __construct();
	}

	public function index( $offset = 0 )
	{
	
		$data['content'] = $this->db->get('data_pribadi');
		$this->load->view('crud/index' , $data);
    }
	

	public function add()
	{
		 
     }

     public function update( $id )
	{
		 
     } 

     public function utama($id)
	{
		 
     }
	
}