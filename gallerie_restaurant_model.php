<?php
class gallerie_restaurant_model extends CI_Model
{

    function get_image($id)
    {
        
        $this->db->select('*');
        $this->db->from('restaurant');
        $this->db->where('restaurant.ID_USER',$id);
        $this->db->join('image_restaurant', 'image_restaurant.ID =restaurant.ID');
        $query = $this->db->get();
        return $query->result();
    }
    function delete_image($id)
    {
        $this->db->where('ID_IMG',$id);
        $this->db->delete('image_restaurant');
        return;
    }
    function add_image($image)
    {
        $this->db->insert('image_restaurant',$image);
        return;
    }
}