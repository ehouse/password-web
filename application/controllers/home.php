<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->helper('url');
		$this->load->helper('form');
		$data['website'] = 'Password';
		$data['page_title'] = 'home';
		$this->load->view('header',$data);
		$this->load->view('menu',$data);
		$this->load->view('password-gen');
		$this->load->view('footer');
	}
}
