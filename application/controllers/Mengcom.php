<?php
defined('BASEPATH') or exit('no direct script access allowed');
class mengcom extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    } 
    public function index()
    {
        $this->load->view('mengcom-header');
        $this->load->view('mengcom-home');
        $this->load->view('mengcom-footer');
    }
    public function artikel()
    {
        $this->load->view('mengcom-header');
        $this->load->view('mengcom-artikel');
        $this->load->view('mengcom-footer');
    }
    public function event()
    {
        $this->load->view('mengcom-header');
        $this->load->view('mengcom-event');
        $this->load->view('mengcom-footer');
    }
    public function tentang()
    {
        $this->load->view('mengcom-header');
        $this->load->view('mengcom-tentang');
        $this->load->view('mengcom-footer');
    }

    public function masuk()
    { 
        $this->load->view('login');
        $this->load->model('mengcomdb');
    }

    public function akun()
    {
        $this->load->view('mengcom-header');
        $this->load->view('mengcom-akun');
        $this->load->view('mengcom-footer');
    }

    public function model()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'panggilan' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_wa'),
            'bio' => $this->input->post('bio'),
        ];
        $this->load->view('mengcom-header');
        $this->load->view('mengcom-akun-model' , $data);
        $this->load->view('mengcom-footer');
    }

    
}