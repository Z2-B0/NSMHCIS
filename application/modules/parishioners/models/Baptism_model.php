<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Baptism_model extends CI_Model
{
    function __construct() 
    {
        parent::__construct();
    }
    
    function insert_reservation($reservation){
        if($this->db->insert('tbluser_request_type', $reservation)){
             return true;
        }else{
            return false;
        }
       
    }
    
    function insert_baptism($baptism_info){
        $this->db->insert('tblbaptism', $baptism_info);
        return true;
    }
    
    
    
}
?>
