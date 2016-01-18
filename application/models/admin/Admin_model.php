<?php
class Admin_model extends CI_Model {

    public function get_admin_by_id($data){
        $query=$this->db->query("select * from admin_details where id=$data[id]");
        foreach($query->result() as $row){
            $temp['count']=1;
            $temp['contact_first']=$row->contact_first;
            $temp['contact_second']=$row->contact_second;
            $temp['email_first']=$row->email_first;
            $temp['email_second']=$row->email_second;
            $temp['office_address']=$row->office_address;
            $temp['factory_address']=$row->factory_address;
            $response=$temp;
        }
        return $response;
    }
    public function update_admin_data($data) {
        $response=array();
        $sql = "update admin_details set contact_first= ?, contact_second= ?, email_first=?, email_second=?, office_address=?, factory_address=? where id=?";
        $values = array($data['contact_first'],$data['contact_second'],$data['email_first'],$data['email_second'],$data['office_address'],$data['factory_address'],$data['id']);
        if($this->db->query($sql,$values)) {
            $response['status']=200;
            $response['msg']="Admin Data Updated Successfully";
        }
        else {
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
        }
        return $response;
    }
}
?>