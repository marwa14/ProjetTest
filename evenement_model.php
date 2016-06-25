<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 01/06/2016
 * Time: 14:17
 */
class evenement_model extends CI_Model {

    public function get_evenement($id)
    {
        $this->db->select('*');
        $this->db->from('restaurant');
        $this->db->where('restaurant.ID_USER',$id);
        $this->db->join('evenement', 'evenement.ID =restaurant.ID');
        $query = $this->db->get();
        return $query->result();
    }
    function add_evenement($eve)
    {
        $this->db->insert('evenement',$eve);
        return;
    }
    function delete_eve($id)
    {
        $this->db->where('ID_EVE',$id);
        $this->db->delete('evenement');
        return;
    }

}