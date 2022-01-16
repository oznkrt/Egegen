<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public  function  __construct()
    {
        parent::__construct();
        $this->load->model("DB_models");
        $this->load->library('form_validation');
        $this->load->helper(array ( 'form' ,'url'));
    }
	public function index()
    {
        $get=array(
            'sliders'   =>$this->DB_models->get_datas('','slider'),
            'abouts'   =>$this->DB_models->get_datas('','about'),
            'news'   =>$this->DB_models->get_datas('','news'),
            'title'      =>'Egegen|Anasayfa',
        );
        $this->load->view('home',$get);
    }

}
