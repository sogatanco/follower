<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Follower extends CI_Controller {

	public function index()
	{
		$this->load->view('follower');
		// to load the display page in application > view
	}
}
