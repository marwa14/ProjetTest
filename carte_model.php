<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 01/06/2016
 * Time: 14:17
 */
class carte_model extends CI_Model {
    
    public function get_carte($id)
    {
        $this->db->select('*');
        $this->db->from('restaurant');
        $this->db->where('restaurant.ID_USER',$id);
        $this->db->join('carte_restaurant', 'carte_restaurant.ID =restaurant.ID');
        $query = $this->db->get();
        return $query->result();
    }
    function add_carte($carte)
    {
        $this->db->insert('carte_restaurant',$carte);
        return;
    }
    function delete_carte($id)
    {
        $this->db->where('ID_CARTE',$id);
        $this->db->delete('carte_restaurant');
        return;
    }
    
}