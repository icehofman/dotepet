<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class Home extends CI_Controller {
	
	// https://engagingcomms.com.au/mailchimp-api-v3-codeigniter-library-integration/
	public function index() {
		$this->load->view ( 'index' );
	}
	public function cadastrar() {
		
		redirect ( "home" );
	}
}
