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
    public function konsul()
    {
        $this->load->view('mengcom-header');
        $this->load->view('mengcom-konsultasi');
        $this->load->view('mengcom-footer');
    }
    public function tanya()
    {
        $this->load->view('mengcom-header');
        $this->load->view('mengcom-tanyajawab');
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
        redirect('Autentifikasi');
    }

    public function regis (){
        redirect('Autentifikasi/registrasi');
    }

    public function logot(){
        redirect('Autentifikasi/logout');
    }

}