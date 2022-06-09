<?php

/**
 *
 */
class Home extends CI_Controller
{

  public function index()
  {
    $nasional = json_decode(file_get_contents('https://dekontaminasi.com/api/id/covid19/stats'), true);
    $data = [
      'title' => 'COVID-19 Nasional',
      'nasional' => $nasional,
      'isi'   => 'v_home',
    ];

    // var_dump($data);
    $this->load->view('layout/v_wrapper', $data);
  }

  public function petalokal()
  {
    $lokalpem = json_decode(file_get_contents('https://lintangwisesa.github.io/Indonesia-Covid19-Maps/data/provinsi/all.json'), true);
    $data = [
      'lokalpem' => $lokalpem,
      'isi'   => 'v_pemetaan',
    ];
    // 
    // var_dump($data);
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
