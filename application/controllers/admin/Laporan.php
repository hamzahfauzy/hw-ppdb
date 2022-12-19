<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Laporan extends CI_Controller { 

	
	function __construct()
	{
		parent::__construct();
		$this->authenticated->check();
		$this->load->model('Student');
		$this->load->library('phpqrcode/qrlib');
		$this->load->library('Pdf');
	}

	public function index($jenjang = "Semua")
	{
	    if($jenjang == "Semua")
		    $students = $this->Student->get();
		else
		{
		    $students = $this->Student->get_jenjang($jenjang);
		}
		$this->load->view('layouts/top');
		$this->load->view('layouts/left');
		$this->load->view('admin/laporan/index',[
			'students' => $students,
			'jenjang' => $jenjang,
			'judul' => "Laporan Pendaftaran"
		]);
		$this->load->view('layouts/bottom');
	}
	
	function downloadRingkasan($id)
	{
		$ringkasan = $this->ringkasan($id,1);
		$siswa = $this->Student->find(['id'=>$id]);
		$this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = $siswa->register_number.".pdf";
		$this->pdf->load_string($ringkasan);
	}
	
	function ringkasan($id, $pdf = false)
	{
		$siswa = $this->Student->find(['id'=>$id]);
		$sekolah = $this->Student->school(['student_id'=>$id]);
		$saudara = $this->Student->siblings(['student_id'=>$id]);
		$orangtua = $this->Student->parents(['student_id'=>$id]);
		$prestasi_akademis = $this->Student->achievements(['student_id'=>$id,'type'=>'Akademis']);
		$prestasi_non_akademis = $this->Student->achievements(['student_id'=>$id,'type'=>'Non-Akademis']);
		$kesehatan = $this->Student->health(['student_id'=>$id]);
		$labels = [
			'data_pribadi' => [
				'NIK' => 'NIK',
				'name' => 'Nama Lengkap',
				'nickname' => 'Nama Panggilan',
				'gender' => 'Jenis Kelamin',
				'birthplace' => 'Tempat Lahir',
				'birthdate' => 'Tanggal Lahir',
				'religion' => 'Agama',
				'address' => 'Alamat',
				'language' => 'Bahasa Sehari-hari',
				'phone' => 'No HP',
				'email' => 'Email',
				'life_with' => 'Tinggal Dengan',
				'birth_order' => 'Anak Ke',
				'num_of_siblings' => 'Jumlah Saudara Kandung',
			],
			'kesehatan' => [
				'weight' => 'Berat Badan',
				'hight' => 'Tinggi Badan',
				'blood_type' => 'Golongan Darah',
				'imudity' => 'Imunisasi',
				'tht_problem_description' => 'Masalah THT',
				'alergi_description' => 'Alergi',
				'opname_description' => 'Perawatan Rumah Sakit',
				'went_to_doctor_description' => 'Pergi ke Dokter',
			]
		];

		$kop = 'public/images/kop.jpg';
		$type_kop = pathinfo($kop, PATHINFO_EXTENSION);
		$data_kop = file_get_contents($kop);
		$kop = 'data:image/' . $type_kop . ';base64,' . base64_encode($data_kop);

		QRcode::png($siswa->register_number,'public/qrcode/'.$siswa->register_number.'.png');
		$path = 'public/qrcode/'.$siswa->register_number.'.png';
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = $pdf?'data:image/' . $type . ';base64,' . base64_encode($data):base_url($path);
		return $this->load->view('daftar/selesai',[
			'qrcode' => $base64,
			'siswa' => $siswa,
			'sekolah' => $sekolah,
			'saudara' => $saudara,
			'orangtua' => $orangtua,
			'prestasi_akademis' => $prestasi_akademis,
			'prestasi_non_akademis' => $prestasi_non_akademis,
			'kesehatan' => $kesehatan,
			'labels' => $labels,
			'kop' => $kop,
		],TRUE);
	}
}
