<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('hak_akses') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Opps! Anda bukan petugas PNBP</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			  	</div>');
            redirect('petugas/login');
        }
    }

    public function index()
    {
        $data['registrasi'] = $this->M_petugas->ambil_data('registrasi')->result();
        $data['header'] = "Dashboard | Distrik Navigasi Kelas I Tanjung Priok";
        $this->load->view('petugas/v_dashboard', $data);
    }
}
