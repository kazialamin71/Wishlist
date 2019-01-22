<?php
class Wish extends CI_Model{
    public function showdata(){
            $query=$this->db->get('items');
            if($query->num_rows() > 0){
                return $query->result();
            }else{
                return false;
            }
        }


        public function Itemdelete(){
            $id = $this->input->get('id');
            $this->db->where('item_id', $id);
            $this->db->delete('items');
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }

        public function addnewitems(){
            $field = array(
                'title'=>$this->input->post('formtitle'),
                'item_desc'=>$this->input->post('formdesc'),
                'url'=>$this->input->post('formurl'),
                'price'=>$this->input->post('formprice'),
                'priority'=>$this->input->post('formpriority'),
                'user_id'=>$this->input->post('userid')
            );
            $this->db->insert('items', $field);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }

}