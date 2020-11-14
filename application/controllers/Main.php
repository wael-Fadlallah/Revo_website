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
    }
    public function about()
	{
        $title=' عن ريفو ';
        $this->load->view('header',array('title'=>$title));
        $this->load->view('about');
    }
    public function contact()
	{
        $title='Contact Revo';
        $this->load->view('header',array('title'=>$title));
        $this->load->view('contact');
    }
}
