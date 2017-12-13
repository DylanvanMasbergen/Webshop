<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

    // ------------------------------------------------------------------------
    
    public function index()
    {
    	$this->load->view('inc/header');
        $this->load->view('home', $this->data);
        $this->load->model('Products_model');
        $this->data['title'] = 'Products';
        $this->data['products'] = $this->Products_model->get_all();
        $this->load->view('products', $this->data);
        $this->load->view('inc/footer');
    }
    
    // ------------------------------------------------------------------------

    public function register()
    {	
    	$this->load->view('inc/header');
        $this->load->view('home/register', $this->data);
		$this->load->view('inc/footer');
    	
    	$email = $this->input->post('email');
    	$address = $this->input->post('address');
        $phone = $this->input->post('phone');

        $date_added =$this->input->post('date_added');     
        $password = $this->input->post('password');
        $this->load->model('user_model');
        $this->user_model->register($email,$password, $address, $phone);

        
    }
    // ------------------------------------------------------------------------

    // ------------------------------------------------------------------------
    
}
