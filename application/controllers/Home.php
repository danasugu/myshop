<?php

class Home extends CI_Controller {
  public function index()
{
  $this->load->view('home');
}

  public function aboutus()
{
  $this->load->view('aboutus');
}

}