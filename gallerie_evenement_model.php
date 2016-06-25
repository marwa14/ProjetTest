<?php
class gallerie_evenement_model extends CI_Model
{

    function get_image($id)
    {

        $this->db->select('*');
        $this->db->from('restaurant');
        $this->db->where('restaurant.ID_USER',$id);
        $this->db->join('evenement', 'evenement.ID =restaurant.ID');
        $this->db->join('image_evenement', 'image_evenement.ID_EVE =evenement.ID_EVE');
        $query = $this->db->get();
        return $query->result();
    }
    function delete_image($id)
    {
        $this->db->where('ID_IM',$id);
        $this->db->delete('image_evenement');
        return;
    }
    function add_image($image)
    {
        $this->db->insert('image_evenement',$image);
        return;
    }
}