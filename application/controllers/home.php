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

  public function v_pemetaan()
  {
    $pemetaan = json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'), true);
    $data = [
      'pemetaan' => $pemetaan,
      'isi'   => 'v_pemetaan',
    ];

    $this->load->view('layout/v_wrapper', $data);
  }

  public function v_global()
  {
    $global = json_decode(file_get_contents('https://api.kawalcorona.com/'), true);
    $positif = json_decode(file_get_contents('https://api.kawalcorona.com/positif'), true);
    $sembuh = json_decode(file_get_contents('https://api.kawalcorona.com/sembuh'), true);
    $meninggal = json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'), true);
    $data = [
      'title' => 'COVID-19 Global',
      'global' => $global,
      'positif' => $positif,
      'sembuh' => $sembuh,
      'meninggal' => $meninggal,
      'isi'   => 'v_global',
    ];
    $this->load->view('layout/v_wrapper', $data);
  }

  public function v_globalpem()
  {
    $globalpem = json_decode(file_get_contents('https://api.kawalcorona.com/'), true);
    $data = [
      'globalpem' => $globalpem,
      'isi'   => 'v_globalpem',
    ];

    $this->load->view('layout/v_wrapper', $data);
  }
}
