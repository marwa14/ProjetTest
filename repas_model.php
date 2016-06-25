<?php
class repas_model extends CI_Model
{

    public function get_repas($id)
    {
        $this->db->select('*');
        $this->db->from('restaurant');
        $this->db->where('restaurant.ID_USER', $id);
        $this->db->join('carte_restaurant', 'carte_restaurant.ID =restaurant.ID');
        $this->db->join('repas', 'carte_restaurant.ID_CARTE =repas.ID_CARTE');
        $query = $this->db->get();
        return $query->result();
    }
    function delete_repas($id)
    {
        $this->db->where('ID_REPAS',$id);
        $this->db->delete('repas');
    }
    function add_repas($repas)
    {
        $this->db->insert('repas',$repas);
    }
}
?>