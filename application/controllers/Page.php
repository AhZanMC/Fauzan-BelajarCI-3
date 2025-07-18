<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Page extends CI_Controller
{
	public function index()
	{
		$this->load->view('home');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function contact()
	{
		// Ini untuk menangani form submit jika ada
		// kalo gak ada form submit, maka akan menampilkan halaman contact :v
		if ($this->input->method() === 'post') {
			print_r($this->input->post()); // print_r() buat debugging, untuk melihat data yang dikirim
		}

		// untuk menampilkan halaman contact
		$this->load->view('contact');
	}
}