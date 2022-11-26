<?php

class Upload extends CI_Controller
{
  public function index()
  {
    $data['header'] = "Form Upload PKK & SPM | Distrik Navigasi Kelas I Tanjung Priok";
    $this->load->view('agen/v_upload', $data);
  }
}
