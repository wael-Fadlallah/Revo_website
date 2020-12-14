<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
        public function __construct(){
        parent::__construct();
    }
    public function index()
	{
        $title='Revo Tech';
        $this->load->view('header',array('title'=>$title));
        $this->load->view('index');
        $this->load->view('footer');
    }
    public function about()
	{
        $title=' عن ريفو ';
        $this->load->view('header',array('title'=>$title));
        $this->load->view('about');
        $this->load->view('footer');
    }
    public function contact()
	{
        $title='تواصل معنا';
        $this->load->view('header',array('title'=>$title));
        $this->load->view('contact');
        $this->load->view('footer');
    }
}
