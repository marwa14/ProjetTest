<?php

class commentaire_model extends CI_Model {

    public function get_commentaire($id)
    {
        $this->db->select('*');
        $this->db->from('restaurant');
        $this->db->where('restaurant.ID_USER',$id);
        $this->db->join('commentaire', 'commentaire.ID =restaurant.ID');
        $this->db->join('utilisateur', 'utilisateur.ID_USER =commentaire.ID_USER');
        $query = $this->db->get();
        return $query->result();
    }
   

}