<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		 $this->load->model('model_mahasiswa');
  		$v['data'] = $this->model_mahasiswa->left();
  		$v['data2'] = $this->model_mahasiswa->right();
  		$v['data3'] = $this->model_mahasiswa->right();
		$this->load->view('cetak', $v);	
     }
	

	public function header()
	{
		 $this->load->view('header');
     }

     public function footer()
	{
		 $this->load->view('footer');
     } 

     public function daftar()
	{
		 $this->load->view('daftar');
     }
     public function cetak()
	{
		 
  		$this->load->view('cetak', $v);
     }

     
	public function formulir(){
		$this->load->view('form_rekomendasi');
	}
	
}