<?php
class Wishlist extends CI_Controller{


    public function index(){

    }
    public function showallitem(){
        $this->load->model('Wish');
        $result = $this->Wish->showdata();
        echo json_encode($result);
    }

    public function testshow(){
        $this->load->model('Wish');
        $result = $this->Wish->showdata();
        $data['some']=json_encode($result);
        $this->load->view('trying',$data);
    }

    public function deleteitem(){
        $this->load->model('Wish');
        $result = $this->Wish->Itemdelete();
        $msg['success'] = false;
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function additem(){
        $this->load->model('Wish');
        $result= $this->Wish->addnewitems();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

}