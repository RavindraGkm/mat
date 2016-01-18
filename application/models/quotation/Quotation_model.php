<?php
class Quotation_model extends CI_Model {

    public function add_new_quotation($data) {
        $response=array();
        $sql = "insert into quotations (clients_id, quotation_date , total_amount) values (?,?,?)";
        date_default_timezone_set("Asia/Kolkata");
        $values = array($data['client_id'],date('Y-m-d'),$data['grand_total_sum']);
        if($this->db->query($sql,$values)) {
            $quotation_id=$this->db->insert_id();
            for($i=0;$i<count($data['item_names']);$i++) {
                if($data['item_names'][$i]!='') {
                    $sql = "insert into quotations_details (quotations_id, item_name, dim_1, dim_2, dim_3, dim_4,quantity,rate,total) values (?,?,?,?,?,?,?,?,?)";
                    $values = array($quotation_id,$data['item_names'][$i],$data['dim_1'][$i],$data['dim_2'][$i],$data['dim_3'][$i],$data['dim_4'][$i],$data['qty'][$i],$data['rate'][$i],$data['total'][$i]);
                    $this->db->query($sql,$values);
                }
            }
            $response['quotation_id']=$quotation_id;
            $response['status']=200;
        }
        else {
            $response['status']=500;
        }
        return $response;
    }
    public function get_all_quotations() {
        $response=array();
        $sql = "select quotations.id,quotations.quotation_date,quotations.total_amount,clients_details.client_name from quotations INNER JOIN clients_details ON clients_details.id=quotations.clients_id";
        if($query=$this->db->query($sql)) {
            foreach($query->result() as $row) {
                $temp['client_name']= $row->client_name;
                $temp['id']= $row->id;
                $quot_date['quotation_date']=$row->quotation_date;
                $temp['quotation_date'] = new DateTime($quot_date['quotation_date']);
                $temp['quotation_date'] = $temp['quotation_date']->format('d-m-Y');
                $temp['total_amount']=$row->total_amount;
                $quotations[]=$temp;
            }
            $response['status']=200;
            $response['quotations']=$quotations;
        }
        else {
            $response['status']=500;
        }
        return $response;
    }
    public function get_quotation_by_id($quotation_id) {
        $response=array();
        $quotation_details=array();
        $sql = "select clients_details.client_name,clients_details.client_contact,clients_details.id as client_id, clients_details.client_address,clients_details.client_tin, quotations.id, quotations.quotation_date, quotations.total_amount  from quotations INNER JOIN clients_details ON clients_details.id=quotations.clients_id where quotations.id=? ";
        $values = array($quotation_id);
        $quot_client_details = array();
        if($query=$this->db->query($sql,$values)) {
            $row=$query->row();
            $quot_client_details['client_name'] = $row->client_name;
            $quot_client_details['client_id'] = $row->client_id;
            $quot_client_details['client_contact'] = $row->client_contact;
            $quot_client_details['client_address'] = $row->client_address;
            $quot_client_details['client_tin'] = $row->client_tin;
            $quot_client_details['quotation_id'] = $row->id;
            $quot_client_details['quotation_date']=new DateTime($row->quotation_date);
            $quot_client_details['quotation_date']=$quot_client_details['quotation_date']->format('d-M-Y');
            $quot_client_details['total_amount'] = $row->total_amount;
            $response['quotation_and_client_details'] = $quot_client_details;
        }
        $sql = "select * from quotations_details where quotations_id= ? ";
        $values = array($quotation_id);
        if($query=$this->db->query($sql,$values)) {
            foreach($query->result() as $row) {
                $temp['item_name']=$row->item_name;
                $temp['dim_1']=$row->dim_1;
                $temp['dim_2']=$row->dim_2;
                $temp['dim_3']=$row->dim_3;
                $temp['dim_4']=$row->dim_4;
                $temp['quantity']=$row->quantity;
                $temp['rate']=$row->rate;
                $temp['total']=$row->total;
                $quotation_details[]=$temp;
            }
            $response['status']=200;
            $response['quotation_details']=$quotation_details;
        }
        else {
            $response['status']=500;
        }
        return $response;
    }
    public function delete_quotation($quotation_id) {
        $response=array();
        $sql = "delete from quotations where id= ? ";
        $values = array($quotation_id);
        if($this->db->query($sql,$values)) {
            $sql = "delete from quotations_details where quotations_id= ?";
            $values = array($quotation_id);
            $this->db->query($sql,$values);
            $response['status']=200;
            $response['msg']="Quotation Deleted Successfully";
        }
        else {
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
        }
        return $response;
    }
}
?>