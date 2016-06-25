<?php

class promotion_model extends CI_Model {

    public function get_promotion($id)
    {
        $this->db->select('*');
        $this->db->from('restaurant');
        $this->db->where('restaurant.ID_USER',$id);
        $this->db->join('carte_restaurant', 'carte_restaurant.ID =restaurant.ID');
        $this->db->join('repas', 'carte_restaurant.ID_CARTE =repas.ID_CARTE');
        $this->db->join('promotion', 'promotion.ID_REPAS =repas.ID_REPAS');
        $query = $this->db->get();
        return $query->result();
    }
    function add_promotion($promo)
    {
        $this->db->insert('promotion',$promo);
        return;
    }
    function delete_promotion($id)
    {
        $this->db->where('ID_PRO',$id);
        $this->db->delete('promotion');
        return;
    }

}