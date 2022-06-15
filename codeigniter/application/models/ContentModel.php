<?php
class ContentModel extends CI_Model {

public function __construct() {
    parent::__construct();
}

public function getAmountOfTeams(){
    return $this->db->count_all('team');  
}

public function getTeams($perPage, $pageNumber){
    $this->db->select();
    $this->db->from('team');
    $this->db->limit($perPage, $pageNumber * $perPage);


    return $this->db->get()->result();
}



public function editTeam($id, $nazev){
    $this->db->set('name', $nazev);
    $this->db->where('idteam', $id);
    $this->db->update('team'); 
}

public function deleteTeam($id){
    $this->db->where('idteam', $id);
    $this->db->delete('team');

    
}
}