<?php

/**
 *
 */
class Home extends CI_Controller
{

  public function index()
  {
    $nasional = json_decode(file_get_contents('https://covid19.mathdro.id/api/countries/id'), true);
    $provinsi = json_decode(file_get_contents('https://banuacoders.com/api/pico/provinsi'), true);
    $data = [
      'title' => 'COVID-19 Nasional',
      'nasional' => $nasional,
      'provinsi' => $provinsi,
      'isi'   => 'v_home',
    ];

    // var_dump($data);
    $this->load->view('layout/v_wrapper', $data);
  }

  public function petalokal()
  {
    $pemetaan = json_decode(file_get_contents('https://covid19.mathdro.id/api/countries/id/confirmed'), true);
    $data = [
      'pemetaan' => $pemetaan,
      'isi'   => 'v_pemetaan',
    ];

    $this->load->view('layout/v_wrapper', $data);
  }

  public function global()
  {
    $global = json_decode(file_get_contents('https://api.covid19api.com/world/total'), true);
    $global2 = json_decode(file_get_contents('https://covid19.mathdro.id/api/confirmed'), true);

    $data = [
      'title' => 'COVID-19 Global',
      'global' => $global,
      'global2' => $global2,
      'isi'   => 'v_global',
    ];
    $this->load->view('layout/v_wrapper', $data);
  }

  public function petaglobal()
  {
    $globalpem = json_decode(file_get_contents('https://covid19.mathdro.id/api/confirmed'), true);
    $data = [
      'globalpem' => $globalpem,
      'isi'   => 'v_globalpem',
    ];

    $this->load->view('layout/v_wrapper', $data);
  }
}
