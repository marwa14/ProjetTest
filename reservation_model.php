<?php

class reservation_model extends CI_Model {

    public function get_reservation($id)
    {
        $this->db->select('*');
        $this->db->from('restaurant');
        $this->db->where('restaurant.ID_USER',$id);
        $this->db->join('reservation', 'reservation.ID =restaurant.ID');
        $this->db->join('utilisateur', 'utilisateur.ID_USER =reservation.ID_USER');
        $query = $this->db->get();
        return $query->result();
    }


}