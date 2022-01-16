<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nopage extends CI_Controller {

	public  function  __construct()
    {
        parent::__construct();
       
    }
	public function page()
    {
        $get=array(
            
            'title'      =>'Sayfa Bulunamadı',
        );
        $this->load->view('nopage',$get);
    }

}
