<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Menu extends CI_Controller {
   public function index()
   {
      $this->load->view('header');
      $this->load->view('menu_principal');
      $this->load->view('footer');
   }
}