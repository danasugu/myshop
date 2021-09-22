<?php

class Home extends CI_Controller {
  
  public function index()
{
  $this->load->view('header/header');
  $this->load->view('header/css');
  $this->load->view('header/navbar');
  $this->load->view('header/mainHome');
  $this->load->view('header/footer');
}

  public function aboutus()
{
  $this->load->view('header/header');
  $this->load->view('header/css');
  $this->load->view('header/navbar');
  $this->load->view('about/mainHome');
  $this->load->view('header/footer');
}

}