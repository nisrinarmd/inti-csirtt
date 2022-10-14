<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller
{
    public function index()
    {
    }
    public function tentang()
    {
        $this->load->view('rfc2350/tentang-csirt');
    }
    public function kebijakan()
    {
        $this->load->view('rfc2350/kebijakan');
    }
    public function siber()
    {
        $this->load->view('siber/aduan_siber');
    }
    public function indok()
    {
        $this->load->view('rfc2350/informasi-dokumen');
    }

    public function alper()
    {
        $this->load->view('rfc2350/alamat');
    }
    public function dokpen()
    {
        $this->load->view('rfc2350/dokpen');
    }
    public function profil()
    {
        $this->load->view('landing/profil');
    }
    public function layanan()
    {
        $this->load->view('landing/layanan');
    }
    public function hubungi()
    {
        $this->load->view('landing/hubungi');
    }
    public function buletin()
    {
        $this->load->view('landing/buletin');
    }
}
