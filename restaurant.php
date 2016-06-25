<?php
class restaurant extends CI_Controller
{
    function index()
    {
        $this->load->library('session');
        $id = $this->session->userdata('id_user');
        $restaurant=array();
        $this->db->select('*');
        $this->db->from('restaurant');
        $this->db->where('restaurant.ID_USER',$id);
        $query = $this->db->get();
        $result=$query->result();
        if ($result !=null)
        {
            $restaurant['restaurant']=$result;
            $this->load->view('accueil',$restaurant);
        }
        else{
        $this->load->view('accueil');}
    }
    function delete()
    {
        
        $id=$this->input->post('ID');
        $this->restaurant_model->delete_restaurant($id);

    }
    function create ()
    {
        $this->load->library('session');
        $id = $this->session->userdata('id_user');
        $restaurant= array (

            'NOM'=>$this->input->post('nom'),
            'DESCRIPTION'=>$this->input->post('description'),
            'SERVICE'=>$this->input->post('service'),
            'MOYEN_PAIEMENT'=>$this->input->post('moyen'),
            'HORAIRE_OUVERTURE'=>$this->input->post('horaire'),
            'LOCALISATION'=>$this->input->post('localisation'),
            'REGION'=>$this->input->post('region'),
            'NB_TABLE'=>$this->input->post('nb_table'),
            'NB_PERS_TABLE'=>$this->input->post('nb_pers_table'),
            'FEATURED'=>$this->input->post('featured'),
            'ID_USER'=> $id


        );
        $this->restaurant_model->add_restaurant($restaurant);

    }
    function edit_page($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('restaurant');
        $row=$query->row();
        $rest['rest']=$row;
        $this->load->view("edit_restaurant",$rest);

    }
    function edit()
    {
        $id=$this->input->post('id');
        $this->load->library('session');
        $id_user = $this->session->userdata('id_user');
        $restaurant= array (
            'NOM'=>$this->input->post('nom'),
            'DESCRIPTION'=>$this->input->post('description'),
            'SERVICE'=>$this->input->post('service'),
            'MOYEN_PAIEMENT'=>$this->input->post('moyen'),
            'HORAIRE_OUVERTURE'=>$this->input->post('horaire'),
            'LOCALISATION'=>$this->input->post('localisation'),
            'REGION'=>$this->input->post('region'),
            'NB_TABLE'=>$this->input->post('nb_table'),
            'NB_PERS_TABLE'=>$this->input->post('nb_pers_table'),
            'FEATURED'=>$this->input->post('featured'),
             'ID_USER'=> $id_user 
        );
        
        $this->db->where('id',$id);
        $this->db->update('restaurant',$restaurant);
      
    }

}