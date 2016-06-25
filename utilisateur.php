<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 16/06/2016
 * Time: 01:33
 */
class utilisateur extends CI_Controller
{
    function create ()
    {
        
            $utilisateur= array (

            'nom'=>$this->input->post('nom'),
            'prenom'=>$this->input->post('prenom'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'username'=>$this->input->post('username'),
            'type'=>'admin_restaurant'
        );

        
        $this->utilisateur_model->add_utilisateur($utilisateur);
       
     
        
     
    }
    function verif_user()
    {
        $password=$this->input->post('password');
        $username=$this->input->post('username');
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('utilisateur.username',$username);
        $this->db->where('utilisateur.password',$password);
        $query = $this->db->get();
        $result=$query->result();
        if ($result!=null)
        {
            foreach ($query->result() as $row)
            {
                $id=$row->ID_USER;
            }

            $this->load->library('session');
            $this->session->set_userdata('id_user', $id);
            
            echo $id;
        }
        else
            echo "0";

    }
}
?>