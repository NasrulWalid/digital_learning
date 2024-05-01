<?php
class Login extends CI_Controller
{
    public function index()
    {
        // Tampilkan form login
        $this->load->view('view-login');
    }

}
