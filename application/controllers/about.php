<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class about extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data['website'] = 'Password';
		$data['page_title'] = 'about';
		$this->load->view('header',$data);
		$this->load->view('menu',$data);
		$this->load->view('about-view');
		$this->load->view('footer');
	}
}
