<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 01/06/2016
 * Time: 14:17
 */
class categorie_model extends CI_Model {

    public function get_categorie($id)
    {
        $this->db->select('*');
        $this->db->from('restaurant');
        $this->db->where('restaurant.ID_USER',$id);
        $this->db->join('carte_restaurant', 'carte_restaurant.ID =restaurant.ID');
        $this->db->join('categorie', 'categorie.ID_CARTE =carte_restaurant.ID_CARTE');
        $query = $this->db->get();
        return $query->result();
    }
    function add_categorie($categorie)
    {
        $this->db->insert('categorie',$categorie);
        return;
    }
    function delete_categorie($id)
    {
        $this->db->where('ID',$id);
        $this->db->delete('categorie');
        return;
    }
    function categorie_carte($id)
    {
        $this->db->select('*');
        $this->db->from('categorie');
        $this->db->where('categorie.ID_CARTE',$id);
        $query = $this->db->get();
        return $query->result();
    }

}