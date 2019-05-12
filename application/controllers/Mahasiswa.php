<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		require 'mail/phpmailer/PHPMailerAutoLoad.php';
	}

	public function index()
	{
		$this->load->view('cetak');
	}

	public function cetak()
	{
		 $this->load->model('model_mahasiswa');
  		$v['data'] = $this->model_mahasiswa->left()->result();
  		$this->load->view('cetak',$v);
	}

	public function add(){

		$data_pribadi['no_ktp'] = $this->input->post('no_ktp');
		$data_pribadi['nama_lengkap'] = $this->input->post('nama_lengkap');
		$data_pribadi['agama'] = $this->input->post('agama');
	    $data_pribadi['jenis_kelamin'] = $this->input->post('jenis_kelamin');
	    $data_pribadi['tempat_lahir'] = $this->input->post('tempat_lahir');
	    $data_pribadi['tanggal_lahir'] = $this->input->post('tanggal_lahir');
	    $data_pribadi['no_hp'] = $this->input->post('no_hp');
	    $data_pribadi['no_telp'] = $this->input->post('no_telp');
	    $data_pribadi['email'] = $this->input->post('email');
	    $data_pribadi['npwp'] = $this->input->post('npwp');
		

		$this->load->model('model_mahasiswa');
		$this->model_mahasiswa->addPribadi($data_pribadi);

		
	    $data_alamat['alamat'] = $this->input->post('alamat');
	    $data_alamat['id_pribadi'] = $this->input->post('alamat');
	    $data_alamat['rt'] = $this->input->post('rt');
	    $data_alamat['rw'] = $this->input->post('rw');
	    $data_alamat['provinsi'] = $this->input->post('provinsi');
	    $data_alamat['kota'] = $this->input->post('kota');
	    $data_alamat['kecamatan'] = $this->input->post('kecamatan');
	    $data_alamat['kelurahan'] = $this->input->post('kelurahan');
	    $data_alamat['kode_pos'] = $this->input->post('kode_pos');

		$this->load->model('model_mahasiswa');
		$d = $this->model_mahasiswa->getOne()->result();
   		$data_alamat['id_pribadi'] = $d['0']->id_pribadi;
		$this->model_mahasiswa->addAlamat($data_alamat);

		if($this->input->post('nama_sekolah1')!= NUll){
        $data_pendidikan['nama_sekolah'] = $this->input->post('nama_sekolah1');
        $data_pendidikan['provinsi_sekolah'] = $this->input->post('provinsi_sekolah1');
        $data_pendidikan['kota_sekolah'] = $this->input->post('kota_sekolah1');
        $data_pendidikan['jurusan_sekolah'] = $this->input->post('jurusan_sekolah1');
        $data_pendidikan['tahun_masuk'] = $this->input->post('tahun_masuk1');
        $data_pendidikan['tahun_lulus'] = $this->input->post('tahun_lulus1');
        $data_pendidikan['mtk_uan'] = $this->input->post('mtk_uan1');
        $data_pendidikan['mtk_uas'] = $this->input->post('mtk_uas1');
        $data_pendidikan['tinggi_badan'] = $this->input->post('tinggi_badan1');
        $data_pendidikan['nilaiGPA'] = $this->input->post('nilaiGPA1');
      }elseif ($this->input->post('nama_sekolah2')!= NUll) {
        $data_pendidikan['nama_sekolah'] = $this->input->post('nama_sekolah2');
        $data_pendidikan['provinsi_sekolah'] = $this->input->post('provinsi_sekolah2');
        $data_pendidikan['kota_sekolah'] = $this->input->post('kota_sekolah2');
        $data_pendidikan['jurusan_sekolah'] = $this->input->post('jurusan_sekolah2');
        $data_pendidikan['tahun_masuk'] = $this->input->post('tahun_masuk2');
        $data_pendidikan['tahun_lulus'] = $this->input->post('tahun_lulus2');
        $data_pendidikan['mtk_uan'] = $this->input->post('mtk_uan2');
        $data_pendidikan['mtk_uas'] = $this->input->post('mtk_uas2');
        $data_pendidikan['tinggi_badan'] = $this->input->post('tinggi_badan2');
        $data_pendidikan['nilaiGPA'] = $this->input->post('nilaiGPA2');
      }elseif ($this->input->post('nama_sekolah3')!= NUll) {
        $data_pendidikan['nama_sekolah'] = $this->input->post('nama_sekolah3');
        $data_pendidikan['provinsi_sekolah'] = $this->input->post('provinsi_sekolah3');
        $data_pendidikan['kota_sekolah'] = $this->input->post('kota_sekolah3');
        $data_pendidikan['jurusan_sekolah'] = $this->input->post('jurusan_sekolah3');
        $data_pendidikan['tahun_masuk'] = $this->input->post('tahun_masuk3');
        $data_pendidikan['tahun_lulus'] = $this->input->post('tahun_lulus3');
        $data_pendidikan['mtk_uan'] = $this->input->post('mtk_uan3');
        $data_pendidikan['mtk_uas'] = $this->input->post('mtk_uas3');
        $data_pendidikan['tinggi_badan'] = $this->input->post('tinggi_badan3');
        $data_pendidikan['nilaiGPA'] = $this->input->post('nilaiGPA3');
      }elseif ($this->input->post('nama_sekolah4')!= NUll) {
        $data_pendidikan['nama_sekolah'] = $this->input->post('nama_sekolah4');
        $data_pendidikan['provinsi_sekolah'] = $this->input->post('provinsi_sekolah4');
        $data_pendidikan['kota_sekolah'] = $this->input->post('kota_sekolah4');
        $data_pendidikan['jurusan_sekolah'] = $this->input->post('jurusan_sekolah4');
        $data_pendidikan['tahun_masuk'] = $this->input->post('tahun_masuk4');
        $data_pendidikan['tahun_lulus'] = $this->input->post('tahun_lulus4');
        $data_pendidikan['mtk_uan'] = $this->input->post('mtk_uan4');
        $data_pendidikan['mtk_uas'] = $this->input->post('mtk_uas4');
        $data_pendidikan['tinggi_badan'] = $this->input->post('tinggi_badan4');
        $data_pendidikan['nilaiGPA'] = $this->input->post('nilaiGPA4');
      }elseif ($this->input->post('nama_sekolah5')!= NUll) {
        $data_pendidikan['nama_sekolah'] = $this->input->post('nama_sekolah5');
        $data_pendidikan['provinsi_sekolah'] = $this->input->post('provinsi_sekolah5');
        $data_pendidikan['kota_sekolah'] = $this->input->post('kota_sekolah5');
        $data_pendidikan['jurusan_sekolah'] = $this->input->post('jurusan_sekolah5');
        $data_pendidikan['tahun_masuk'] = $this->input->post('tahun_masuk5');
        $data_pendidikan['tahun_lulus'] = $this->input->post('tahun_lulus5');
        $data_pendidikan['mtk_uan'] = $this->input->post('mtk_uan5');
        $data_pendidikan['mtk_uas'] = $this->input->post('mtk_uas5');
        $data_pendidikan['tinggi_badan'] = $this->input->post('tinggi_badan5');
        $data_pendidikan['nilaiGPA'] = $this->input->post('nilaiGPA5');
      }
		
      	$this->load->model('model_mahasiswa');
		$d = $this->model_mahasiswa->getOne()->result();
   		$data_pendidikan['id_pribadi'] = $d['0']->id_pribadi;
		$this->model_mahasiswa->addPendidikan($data_pendidikan);



		$fromEmail = "hasyagp@gmail.com";
      $isiEmail = "Berhasil mendaftar di findcareer!";
      $mail = new PHPMailer();
      $mail->IsHTML(true);    // set email format to HTML
      $mail->IsSMTP();   // we are going to use SMTP
      $mail->SMTPAuth   = true; // enabled SMTP authentication
      $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
      $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
      $mail->Port       = 465;                   // SMTP port to connect to GMail
      $mail->Username   = $fromEmail;  // alamat email kamu
      $mail->Password   = "70035348";            // password GMail
      $mail->SetFrom('hasyagp@gmail.com', 'Hasya');  //Siapa yg mengirim email
      $mail->Subject    = "Referensi Email";
      $mail->Body       = $isiEmail;
      $toEmail =$this->input->post('email'); // siapa yg menerima email ini
      $mail->AddAddress($toEmail);

      if(!$mail->Send()) {
          echo "Error: ".$mail->ErrorInfo;
      } else {
          echo "Email berhasil dikirim";
      }
     

		
		redirect(site_url("Home/cetak"));
	}


}

