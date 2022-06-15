<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContentController extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('ContentModel');
    }

	public function index()
	{
		$data["title"] = "Úvodní stránka";
		$data["main"] = "content/welcome_message";
		$this->layout->generate($data);
	}

	public function teams($pocetNaStranku, $cisloStranky){
		$this->load->library('pagination');

        $config['base_url'] = base_url() . 'teams/6/';
        $config['first_url'] = base_url() . 'teams/6/1';
        $config['total_rows'] = $this->ContentModel->getAmountOfTeams();
        $config['per_page'] = $pocetNaStranku;

        $config['uri_segment'] = 3;
        
        $this->config->load('pagination');

        $this->pagination->initialize($config);

        

        $cisloStranky -= 1;

        $data["cisloStranky"] = $cisloStranky += 1;
        $data["pocetNaStranku"] = $pocetNaStranku;
        $data['teams'] = $this->ContentModel->getTeams($pocetNaStranku, $cisloStranky);
        $data["title"] = "Teams";
        $data["main"] = "content/teams";
        $data["tableName"] = "TeamsTable";
        $this->layout->generate($data);
	}
}
