<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Rumah_sakit extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('model_rumahSakit');

    }


    function index(){
      $this->load->model('model_rumahSakit');
      $data['rs'] = $this->model_rumahSakit->getData();
      print_r($data['rs']);
      $this->load->view('rs/index', $data);
    }

  }
?>
