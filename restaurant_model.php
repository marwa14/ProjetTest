
<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 01/06/2016
 * Time: 14:17
 */
class restaurant_model extends CI_Model {

public function index()
{
    
}
    function get_restaurant($id)
    {
        $this->db->select('*');
        $this->db->from('restaurant');
        $this->db->where('restaurant.ID_USER',$id);
        $query = $this->db->get();
        return $query->result();
        
    }
    function delete_restaurant($id)
    {
        $this->db->where('ID',$id);
        $this->db->delete('restaurant');
    }
    function add_restaurant($restaurant)
    {
        $this->db->insert('restaurant',$restaurant);
    }
}