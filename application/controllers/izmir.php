<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Izmir extends CI_Controller {

	public  function  __construct()
    {
        parent::__construct();
        $this->load->model("DB_models");
        $this->load->library('form_validation');
        $this->load->helper(array ( 'form' ,'url'));
    }
	public function hakkinda()
    {
        $get=array(
            
            'abouts'   =>$this->DB_models->get_datas('','about'),
            'title'      =>'Egegen|Hakkında',
        );
        $this->load->view('about',$get);
    }

}
