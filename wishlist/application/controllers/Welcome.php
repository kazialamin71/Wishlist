<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome');
	}
	public function create(){
	    $this->load->view('create_item');
    }

    public function add_item(){
        $this->form_validation->set_rules('title','title','trim|required');
        $this->form_validation->set_rules('url','url','trim|required');
        $this->form_validation->set_rules('price','price','trim|required');
        $this->form_validation->set_rules('priority','priority','trim|required');

        if($this->form_validation->run()==FALSE){
            $data=array(
                'error'=>validation_errors()
            );
            $this->session->set_flashdata($data);
            redirect('Welcome/create');
        }

        print_r($_POST);
        $title=$this->input->post('title');
        $url=$this->input->post('url');
        $price=$this->input->post('price');
        $priority=$this->input->post('priority');

        $this->load->model('User');
        $success=$this->User->register($title,$url,$price,$priority);
        echo $success;

    }

}
