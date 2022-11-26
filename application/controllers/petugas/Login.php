<?php

class Login extends CI_Controller
{

    public function index()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $data['header'] = "Form Login | Distrik Navigasi Kelas I Tanjung Priok";
            $this->load->view('petugas/v_login', $data);
        } else {
            $kdakses = $this->input->post('kd_akses');
            $password = $this->input->post('password');

            $cek = $this->M_petugas->check_login($kdakses, $password);

            if ($cek == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
				<strong>Kode Akses Atau Password Salah</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			  	</div>');
                redirect('petugas/login');
            } else {
                $this->session->set_userdata('hak_akses', $cek->hak_akses);
                $this->session->set_userdata('nama', $cek->nama);
                $this->session->set_userdata('id_karyawan', $cek->id_karyawan);
                switch ($cek->hak_akses) {
                    case 1:
                        redirect('petugas/dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kd_akses', 'kode akses', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('petugas/login');
    }
}
