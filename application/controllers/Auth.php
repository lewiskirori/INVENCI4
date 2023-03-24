<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_auth');
	}

	public function access_vouchsafe()
	{
		$this->load->view('access_vouchsafe');
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
	*/
    public function login()
    {
    	$this->logged_in();
    
    	$this->form_validation->set_rules('email', 'Email', 'trim|required');
    	$this->form_validation->set_rules('password', 'Password', 'trim|required');
    
    	$this->form_validation->set_error_delimiters('<p class="alert alert-danger">','</p>');
    
    	if ($this->form_validation->run() == TRUE) {
    		// true case
    		$email_exists = $this->model_auth->check_email($this->input->post('email'));
    
    		if($email_exists == TRUE) {
    			$login = $this->model_auth->login($this->input->post('email'), $this->input->post('password'));
    
    			if($login == true) {
    				$response['success'] = true;
    				$response['message'] = 'Signed in succesfully !!';
    			}
    			if($login) {
    				$logged_in_sess = array(
    					'id' => $login['id'],
    					'username'  => $login['username'],
    					'email'     => $login['email'],
    					'logged_in' => TRUE
    				);
    
        			$this->session->set_userdata($logged_in_sess);
                    
                    //Redirect to dashboard.php view with success message
                    $this->session->set_flashdata();
                    $_SESSION['message'] = "Welcome back, <strong>" . $logged_in_sess['username'] . "</strong>!";
                    redirect('dashboard');
                    }
    			else {
    				$this->data['errors'] = '<p class="alert alert-warning">Incorrect email or password. Please try again.</p>';
    				$this->load->view('login', $this->data);
    			}
    		}
    		else {
    			$this->data['errors'] = '<p class="alert alert-warning">Email does not exist or was misspelled.</p>';
    			$this->load->view('login', $this->data);
    		}	
    	}
    	else {
    		// false case
    		$this->load->view('login');
    	}
    }


	
	/*
		clears the session and redirects to home page
	*/
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('', 'refresh');
	}

}
