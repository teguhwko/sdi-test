<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data['judul'] = 'CV Persia Daya Energi';
        $data['group'] = 'CV Persia Daya Energi';

        $this->load->view('home/index', $data);
    }
}
