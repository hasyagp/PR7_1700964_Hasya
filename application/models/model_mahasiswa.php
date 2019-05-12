<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_mahasiswa extends CI_Model {


  public function left(){
    $this->db->select('Lokomotif.kd_kereta,Lokomotif.nama,Kursi.kd_kursi');
    $this->db->from('Lokomotif');
    $this->db->join('Kursi','Kursi.kd_kereta = Lokomotif.kd_kereta','left');
    $hasil = $this->db->get();
    return $hasil->result();
  }
  public function right(){
    $this->db->select('Kursi.kd_kursi,Gerbong.kd_gerbong,Gerbong.kd_kereta,Gerbong.nama');
    $this->db->from('Kursi');
    $this->db->join('Gerbong','Gerbong.kd_gerbong = Kursi.kd_gerbong','right');
    $ini = $this->db->get();
    return $ini->result();
  }
  public function inner(){
    $this->db->select('Lokomotif.kd_kereta,Lokomotif.nama,Kursi.kd_kursi');
    $this->db->from('Lokomotif');
    $this->db->join('Kursi','Kursi.kd_kereta = Lokomotif.kd_kereta');
    $this->db->join('Gerbong','Gerbong.kd_gerbong = Kursi.kd_gerbong');
    $hasil = $this->db->get();
    return $hasil->result();
  }
  
  
  
}
