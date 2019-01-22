<?php

class User extends CI_Model{

    public function register($firstname,$lastname,$email,$password,$wish_list,$desc){
        $data=array(
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'email'=>$email,
            'password'=>$password,
            'wishlist_name'=>$wish_list,
            'wishlist_desc'=>$desc
        );
        $success =$this->db->insert('user',$data);
        return $success;
    }

    public function verify($email,$password){
        $this->db->where('email',$email);
        $this->db->where('password',$password);

        $result=$this->db->get('user');

        if($result->num_rows()==1){
            return $result->row(0);

        }
        else{
            session_destroy();
        }



//        $result=$query->result();
//        echo "<pre>";
//        print_r($result);
//        print_r($result->num_rows());
    }

    public function getuser(){

    }




}