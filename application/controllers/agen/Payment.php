<?php

class Payment extends CI_Controller
{
  public function index()
  {
    $data['header'] = "form pembayaran";
    $this->load->view('agen/v_payment', $data);
  }
}
