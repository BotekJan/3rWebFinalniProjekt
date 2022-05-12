<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{

    public function index()
    {
        $data["title"] = "Úvodní stránka";
        $data["main"] = "welcome_message";
        $this->layout->generate($data);
    }
}
