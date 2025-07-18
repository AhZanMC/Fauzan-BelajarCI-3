<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Page extends CI_Controller
{
	public function index()
	{
		$data['meta'] = [
			'title' => 'Ingfo Menkrep',
		];

		$this->load->view('home', $data);
	}

	public function about()
	{
		$data['meta'] = [
			'title' => 'Tentang Kami Ingfo Menkrep',
		];
		$this->load->view('about');
	}

	public function contact()
	{
		$data['meta'] = [
			'title' => 'Contact Us',
		];
		
		if($this->input->method() === 'post'){
			print_r($this->input->post());
		}

		$this->load->view('contact', $data);
	}
}