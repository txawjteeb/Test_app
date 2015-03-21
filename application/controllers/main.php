<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
    
    public function __construct()
    {
        parent:: __construct();
        // $this->output->enable_profiler();
        $this->load->model('dashboard');
    }

    public function index()
    {
        $this->load->view('index');
    }
    public function sign_in()
    {
        $this->load->view('sign_in');
    }
}

//end of main controller