<?php

class Registrasi extends CI_Controller
{
  public function index()
  {
    $data['header'] = "Form Registrasi | Distrik Navigasi Kelas I Tanjung Priok";
    $this->load->view('agen/v_registrasi', $data);
  }

  public function tambahDataAksi()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $this->index();
    } else {
      $nama_agen = $this->input->post('nama_agen');
      $email_agen = $this->input->post('email_agen');
      $telpon = $this->input->post('telpon');
      $perusahaan_pelayaran = $this->input->post('perusahaan_pelayaran');
      $alamat = $this->input->post('alamat');
      $nama_kapal = $this->input->post('nama_kapal');
      $kebangsaan = $this->input->post('kebangsaan');
      $gt = $this->input->post('gt');
      $lp = $this->input->post('lp');
      $np = $this->input->post('np');
      $jenis_pelayaran = $this->input->post('jenis_pelayaran');

      $data = array(
        'nama_agen' => $nama_agen,
        'email_agen' => $email_agen,
        'telpon' => $telpon,
        'perusahaan_pelayaran' => $perusahaan_pelayaran,
        'alamat' => $alamat,
        'nama_kapal' => $nama_kapal,
        'kebangsaan' => $kebangsaan,
        'gt' => $gt,
        'lp' => $lp,
        'np' => $np,
        'jenis_pelayaran' => $jenis_pelayaran
      );

      $this->M_petugas->insert_data($data, 'registrasi');
      redirect(base_url('welcome'));
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules('nama_agen', 'nama', 'required');
    $this->form_validation->set_rules('email_agen', 'email', 'required');
    $this->form_validation->set_rules('telpon', 'telpon', 'required');
    $this->form_validation->set_rules('perusahaan_pelayaran', 'pp', 'required');
    $this->form_validation->set_rules('nama_kapal', 'n_kapal', 'required');
    $this->form_validation->set_rules('kebangsaan', 'kebangsaan', 'required');
    $this->form_validation->set_rules('gt', 'gt', 'required');
    $this->form_validation->set_rules('lp', 'lp', 'required');
    $this->form_validation->set_rules('np', 'np', 'required');
    $this->form_validation->set_rules('jenis_pelayaran', 'jp', 'required');
  }
}
