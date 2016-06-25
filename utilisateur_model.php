<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 01/06/2016
 * Time: 14:17
 */
class utilisateur_model extends CI_Model
{

    public function add_utilisateur($utilisateur)
    {
        $this->db->insert('utilisateur',$utilisateur);
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('utilisateur.username',$utilisateur['username']);
        $this->db->where('utilisateur.password',$utilisateur['password']);
        $query = $this->db->get();
        foreach ($query->result() as $row)
            {
                $id=$row->ID_USER;
            }
        $this->load->library('session');
        $this->session->set_userdata('id_user',$id);
        mkdir('./uploads/restaurant/'.$id, 0777, TRUE);
        mkdir('./uploads/evenement/'.$id, 0777, TRUE);

    }
}