<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data['header'] = "Halaman Dashboard | Distrik Navigasi Kelas I Tanjung Priok";
		$this->load->view('welcome_message', $data);
	}
}
