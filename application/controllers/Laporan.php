<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cetak_model');
		$this->load->library('pdf');
		if (!$this->session->userdata('username'))
		{
			redirect('auth');
		}
	}

	public function tgl_indo($tanggal)
	{
		$data = [
			1 => 'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		];

		$pecahkah = explode('-', $tanggal);

		return $pecahkan[2] . ' ' . $bulan [ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}

	public function laporan()
	{
		$data['kriteria'] = $this->Cetak_model->daftarKriteria();
		$data['alternatif'] = $this->Cetak_model->daftarAlternatif();

		$this->load->view('main/cetak-laporan', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();

		$this->pdf->set_paper($paper_size, $orientation);
		$this->pdf->load_html($html);
		$this->pdf->render();

		$this->pdf->stream("Laporan ".tgl_indo(date('Y-m-d')).".pdf", array("Attachment" => false));
	}

}