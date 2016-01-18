<?php
class Billing_model extends CI_Model {

    public function add_new_bill($data) {
        $response=array();
        $billing_date = new DateTime($data['billing_date']);
        $billing_date = $billing_date->format('Y-m-d');
        $sql = "insert into bills (client_id, quotation_id , bill_number, bill_date, total_price, discount_percent, discount_value, amount, total_payable_amount, payment_mode, vat_type, vat_percent, vat_value, advance) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $values = array(
            $data['client_id'],
            $data['quotation_id'],
            $data['bill_number'],
            $billing_date,
            $data['total_bill_price'],
            $data['discount_percent'],
            $data['discount_value'],
            $data['amount'],
            $data['total_payable_amount'],
            $data['mode_payment'],
            $data['vat_type'],
            $data['vat_percent'],
            $data['vat_value'],
            $data['advance']
        );
        if($this->db->query($sql,$values)) {
            $bill_id=$this->db->insert_id();
            for($i=0;$i<count($data['item_names']);$i++) {
                if($data['item_names'][$i]!='') {
                    $sql = "insert into bill_details (bill_id, item_name, dim_1, dim_2, dim_3, dim_4,quantity,rate,total) values (?,?,?,?,?,?,?,?,?)";
                    $values = array($bill_id,$data['item_names'][$i],$data['dim_1'][$i],$data['dim_2'][$i],$data['dim_3'][$i],$data['dim_4'][$i],$data['qty'][$i],$data['rate'][$i],$data['total'][$i]);
                    $this->db->query($sql,$values);
                }
            }
            $response['bill_id']=$bill_id;
            $response['status']=200;
        }
        else {
            $response['status']=500;
        }
        return $response;
    }
    public function get_all_bills() {
        $response=array();
        $sql = "select bills.id,bills.bill_date,bills.total_payable_amount,clients_details.client_name from bills INNER JOIN clients_details ON clients_details.id=bills.client_id where bills.bill_number <> ?";
        $values = array(0);
        if($query=$this->db->query($sql,$values)) {
            foreach($query->result() as $row) {
                $temp['client_name']= $row->client_name;
                $temp['id']= $row->id;
                $billing_date['bill_date']=$row->bill_date;
                $temp['bill_date'] = new DateTime($billing_date['bill_date']);
                $temp['bill_date'] = $temp['bill_date']->format('d-m-Y');
                $temp['total_payable_amount']=$row->total_payable_amount;
                $bills[]=$temp;
            }
            $response['status']=200;
            $response['bills']=$bills;
        }
        else {
            $response['status']=500;
        }
        return $response;
    }
    public function get_all_fake_bills() {
        $response=array();
        $sql = "select bills.id,bills.bill_date,bills.total_payable_amount,clients_details.client_name from bills INNER JOIN clients_details ON clients_details.id=bills.client_id where bills.bill_number = ?";
        $values = array(0);
        if($query=$this->db->query($sql,$values)) {
            foreach($query->result() as $row) {
                $temp['client_name']= $row->client_name;
                $temp['id']= $row->id;
                $billing_date['bill_date']=$row->bill_date;
                $temp['bill_date'] = new DateTime($billing_date['bill_date']);
                $temp['bill_date'] = $temp['bill_date']->format('d-m-Y');
                $temp['total_payable_amount']=$row->total_payable_amount;
                $bills[]=$temp;
            }
            $response['status']=200;
            $response['bills']=$bills;
        }
        else {
            $response['status']=500;
        }
        return $response;
    }
    public function get_bill_by_id($bill_id) {
        $response=array();
        $bill_details=array();
        $sql = "select clients_details.client_name, clients_details.client_address, clients_details.client_contact,clients_details.client_tin, bills.total_price, bills.discount_percent, bills.discount_value ,bills.amount, bills.vat_percent, bills.vat_value , bills.total_payable_amount, bills.payment_mode, bills.id as bill_id, bills.bill_date, bills.bill_number from bills INNER JOIN clients_details ON clients_details.id=bills.client_id where bills.id=? ";
        $values = array($bill_id);
        $bill_client_details = array();
        if($query=$this->db->query($sql,$values)) {
            $row=$query->row();
            $bill_client_details['client_name'] = $row->client_name;
            $bill_client_details['client_address'] = $row->client_address;
            $bill_client_details['client_contact'] = $row->client_contact;
            $bill_client_details['client_tin'] = $row->client_tin;
            $bill_client_details['total_price']=$row->total_price;
            $bill_client_details['discount_percent']=$row->discount_percent;
            $bill_client_details['discount_value']=$row->discount_value;
            $bill_client_details['amount']=$row->amount;
            $bill_client_details['vat_percent']=$row->vat_percent;
            $bill_client_details['vat_value']=$row->vat_value;
            $bill_client_details['total_payable_amount']=$row->total_payable_amount;
            $bill_client_details['payment_mode']=$row->payment_mode;
            $bill_client_details['bill_id']=$row->bill_id;
            $bill_client_details['bill_date']=$row->bill_date;
            $bill_date = new DateTime($bill_client_details['bill_date']);
            $bill_client_details['bill_date'] = $bill_date->format('d-M-Y');
            $bill_client_details['bill_number']=$row->bill_number;
            $response['bill_and_client_details'] = $bill_client_details;
        }
        $sql = "select * from bill_details where bill_id= ? ";
        $values = array($bill_id);
        if($query=$this->db->query($sql,$values)) {
            foreach($query->result() as $row) {
                $temp['bill_id']=$row->bill_id;
                $temp['item_name']=$row->item_name;
                $temp['dim_1']=$row->dim_1;
                $temp['dim_2']=$row->dim_2;
                $temp['dim_3']=$row->dim_3;
                $temp['dim_4']=$row->dim_4;
                $temp['quantity']=$row->quantity;
                $temp['rate']=$row->rate;
                $temp['total']=$row->total;
                $bill_details[]=$temp;
            }
            $response['status']=200;
            $response['bill_details']=$bill_details;
        }
        else {
            $response['status']=500;
        }
        return $response;
    }
    public function get_all_bill_number($bill_number) {
        $sql = "select * from bills where bill_number LIKE ?";
        $query=$this->db->query($sql,array("%".$bill_number."%"));
        $response=array();
        foreach($query->result() as $row) {
            $temp = array('data'=>$row->id,'value'=>$row->bill_number);
            $response[]=$temp;
        }
        return $response;
    }
    public function get_bill_by_bill_number($bill_id){
        $sql = "select id from bills where bill_number= ? ";
        $values = array($bill_id);
        $response = array();
        $query=$this->db->query($sql,$values);
        if ($query->num_rows() > 0) {
            $response['status']=200;
            $response['msg']="This bill number already exist..!!";
        }
        else {
            $response['status']=200;
            $response['msg']="";
        }
        return $response;
    }
    public function delete_bill($bill_id) {
        $response=array();
        $sql = "delete from bills where id= ? ";
        $values = array($bill_id);
        if($this->db->query($sql,$values)) {
            $sql = "delete from bill_details where bill_id= ?";
            $values = array($bill_id);
            $this->db->query($sql,$values);
            $response['status']=200;
            $response['msg']="Bill Deleted Successfully";
        }
        else {
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
        }
        return $response;
    }
}
?>