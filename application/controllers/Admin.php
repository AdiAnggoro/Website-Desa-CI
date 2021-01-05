<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }


    public function index()
    {
        $data['berita'] = $this->m_data->tampil_data()->result();
        $this->load->view('Dashboard', $data);
    }
}
