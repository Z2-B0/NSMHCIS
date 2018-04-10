<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baptism extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('baptism_model');
        $this->load->helper('date');
	}

	public function index(){
            $this->load->view('service_baptism');
            //RESERVATION
//            $this->form_validation->set_rules('txtattendant', 'Attendant', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('txtattendantname', 'AttenedantName', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('txtdate', 'Date', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('txttimes', 'Start Time', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('txttimee', 'End Time', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('txtdescription', 'Description', 'trim|requiredv|xss_clean');
//            $this->form_validation->set_rules('txtpersontocontact', 'Person to Contact', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('txtpersontocontactno', 'Person to Contact Number', 'trim|required|xss_clean');
            
//            //BAPTISM
//            $this->form_validation->set_rules('child_fn', 'Child First Name', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('child_mn', 'Child Middle Name', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('child_ln', 'Child Last Name', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('child_bday', 'Child Birthday', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('child_age', 'Child Age', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('child_gender', 'Child Gender', 'trim|requiredv|xss_clean');
//            $this->form_validation->set_rules('child_pob', 'Child Place of Birth', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('mom_fn', 'Mother First Name', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('mom_mn', 'Mother Middle Name', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('mom_ln', 'Mother Last Name', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('mom_pob', 'Mother Place of Birth', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('mom_rel', 'Mother Religion', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('dad_fn', 'Father First Name', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('dad_mn', 'Father Middle Name', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('dad_ln', 'Father Last Name', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('dad_pob', 'Father Place of Birth', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('dad_rel', 'Father Religion', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('txtmaritalstatus', 'Marital Status', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('txtaddress', 'Marital Status', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('txtpcontact', 'Person Contact', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('txtpcontactno', 'Person Contact Number', 'trim|required|xss_clean');
//            
//            //SPONSOR
//            $this->form_validation->set_rules('sp1_name', 'Sponsor 1 Name', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('sp1_addr', 'Sponsor 1 Address', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('sp1_pob', 'Sponsor 1 Place of Birth', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('sp1_rel', 'Sponsor 1 Religion', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('sp2_name', 'Sponsor 2 Name', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('sp2_addr', 'Sponsor 2 Address', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('sp2_pob', 'Sponsor 2 Place of Birth', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('sp2_rel', 'Sponsor 2 Religion', 'trim|required|xss_clean');
    }
    
    public function func_insert()
    {
        $datef = "%Y-%m-%d %h:%i %a";

        $reservation = array(
            'ur_id' => '5',
            'user_id' => '1',
            'request_type_id' => '1',
            'attendant' => $this->input->post('txtattendant', TRUE),
            'attendantname' => $this->input->post('txtattendantname', TRUE),
            'date_of_request' => mdate($datef),
            'date_of_service' => date('Y-m-d', strtotime($this->input->post('txtdate'))),
            'time_start' => $this->input->post('txttimes', TRUE),
            'time_end' => $this->input->post('txttimee', TRUE),
//            'description' => $this->input->post('txtdescription', TRUE),
//            'persontocontact' => $this->input->post('txtpersontocontact', TRUE),
//            'contact' => $this->input->post('txtpersontocontactno', TRUE),
            'status' => 'Pending'
        );
                
//         $baptism_info = array(
//            'baptism_id' => '1',
//            'child_firstname' => $this->input->post('child_fn'),
//            'child_middlename' => $this->input->post('child_mn'),
//            'child_lastname' => $this->input->post('child_ln'),
//            'birthday' => $this->input->post('child_bday'),
//            'age' => $this->input->post('child_age'),
//            'gender' => $this->input->post('child_gender'),
//            'placeofbirth' => $this->input->post('child_pob'),
//            'momfn' => $this->input->post('mom_fn'),
//            'mommn' => $this->input->post('mom_mn'),
//            'momln' => $this->input->post('mom_ln'),
//            'mombirthplace' => $this->input->post('mom_pob'),
//            'momreligion' => $this->input->post('mom_rel'),
//            'dadln' => $this->input->post('dad_fn'),
//            'dadmn' => $this->input->post('dad_mn'),
//            'dadln' => $this->input->post('dad_ln'),
//            'dadbirthplace' => $this->input->post('dad_pob'),
//            'dadreligion' => $this->input->post('dad_rel'),
//            'address' => $this->input->post('txtaddress'),
//            'contactperson' => $this->input->post('txtpcontact'),
//            'contactnumber' => $this->input->post('txtpcontactno'),
//            'sponsor1_name' => $this->input->post('sp1_name'),
//            'sponsor2_name' => $this->input->post('sp2_name'),
//            'sponsor1_address' => $this->input->post('sp1_addr'),
//            'sponsor2_address' => $this->input->post('sp2_addr'),
//            'sponsor1_placeofbirth' => $this->input->post('sp1_pob'),
//            'sponsor2_placeofbirth' => $this->input->post('sp2_pob'),
//            'sponsor1_religion' => $this->input->post('sp1_rel'),
//            'sponsor2_religion' => $this->input->post('sp2_rel'),
//            'maritalstatus' => $this->input->post('txtmaritalstatus'),
//            'ur_id' => '1'
//        );
                            
        $this->db->trans_start();
            $reservation_query = $this->baptism_model->insert_reservation($reservation);
            //$baptism_query = $this->baptism_model->insert_baptism($baptism_info);
        $this->db->trans_complete();
                
        if($reservation_query){
            echo '<script>alert("DID INSERT");</script>';
        }else{
            echo '<script>alert("DID NOT");</script>';
        }
    }
}
