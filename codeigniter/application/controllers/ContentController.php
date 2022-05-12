<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContentController extends CI_Controller
{

	public function index()
	{
		$data["title"] = "Úvodní stránka";
		$data["main"] = "content/welcome_message";
		$this->layout->generate($data);
	}
}
