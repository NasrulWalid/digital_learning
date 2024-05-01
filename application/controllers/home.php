<?php
class Home extends CI_Controller
{
    public function index()
    {
        // Tampilkan form home
        $this->load->view('view-home');

        
    }
    public function formlogin()
    {
        // Tampilkan form login
        $this->load->view('view-login');
        
    }

}
