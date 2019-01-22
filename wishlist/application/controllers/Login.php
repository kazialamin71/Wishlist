<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 1/2/2019
 * Time: 2:25 PM
 */

class Login extends CI_Controller
{
public function index(){
    $this->load->view('login');
}
    public function reg(){
        $this->load->view('register');
    }

    public function registration(){
        $this->form_validation->set_rules('firstname','firstname','trim|required');
        $this->form_validation->set_rules('lastname','lastname','trim|required');
        $this->form_validation->set_rules('email','email','trim|required');
        $this->form_validation->set_rules('pass','pass','trim|required');
        $this->form_validation->set_rules('','pass','trim|required');
        $this->form_validation->set_rules('pass','pass','trim|required');
        if($this->form_validation->run()==FALSE){
            $data=array(
                'error'=>validation_errors()
            );
            $this->session->set_flashdata($data);
            redirect('Login/reg');
        }

print_r($_POST);
        $firstname=$this->input->post('firstname');
        $lastname=$this->input->post('lastname');
        $email=$this->input->post('email');
        $password=$this->input->post('pass');

        $this->load->model('User');
        $success=$this->User->register($firstname,$lastname,$email,$password);
        echo $success;
    }

    public function login_verify(){
        $username=$this->input->post('email');
        $password=$this->input->post('password');

        $this->load->model('User');
        $userid=$this->User->verify($username,$password);
        if($userid){
            echo 1;
            $data=array(
                'id'=>$userid->id,
                'email'=>$username,
                'wishlist_name'=>$userid->wishlist_name,
                'description'=>$userid->wishlist_desc,
                'loggedin'=>true
            );

            $this->session->set_userdata($data);
        }
        else{
            echo "error";
        }


    }
    public function verify(){

        $this->form_validation->set_rules('email','email','trim|required|min_length[3]');
        $this->form_validation->set_rules('pass','Pass','trim|required|min_length[3]');

        if($this->form_validation->run()==FALSE){
            $data=array(
                'errors'=>validation_errors(),
            );
            $this->session->set_flashdata($data);
            redirect('Login');
        }
        else{
            $username=$this->input->post('email');
            $password=$this->input->post('pass');

            $this->load->model('User');
            $data['userid']=$this->User->verify($username,$password);

            $this->load->view('Welcome',$data);


//            if($userid){
//                $data=array(
//                    'userid'=>$userid,
//                    'username'=>$username,
//                    'loggedin'=>true
//                );
//
//                $this->session->set_userdata($data);
//                $this->session->set_flashdata('login_success','you are now logged in');
////                redirect('users/welcome');
//                redirect('Login/welcome');
//            }
//            else{
//                $this->session->set_flashdata('error','username or password is incorrect');
//                redirect('Login');
//
//            }


        }
    }
    public function welcome(){
    $this->load->view('welcome');
    }



    public function logout(){
        session_unset();
        session_destroy();
        $host  = $_SERVER['HTTP_HOST'];
        $link = "http://localhost/wishlist/index.php/Login";
        echo $link;
    }
}