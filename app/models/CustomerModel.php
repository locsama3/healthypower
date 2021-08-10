<?php
/*
 * Kế thừa từ class Model
 *
 * */
class CustomerModel extends Model {

    function tableFill(){
       return 'shop_customers';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('shop_customers')->insert($data);
        return $this->db->lastId();
    }

    function edit($id, $data)
    {
        $this->db->table('shop_customers')->where('id','=',$id)->update($data);
    }

    public function deleteAt($id, $data)
    {
        $this->db->table('shop_customers')->whereIN('id',"($id)")->update($data);
    }

    public function countRow($field, $value)
    {
        return $this->db->table('shop_customers')->where($field,'=',$value)->count();
    }

//    public function countNoIf(){
//         return $this->db->table('shop_customers')->count();
//    }
    
    public function load($id)
    {
        $value = "";
        $sql = "SELECT * FROM ".$this->tableFill()." WHERE id = $id";
        $result = $this->db->query($sql);
        while($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $value.= '
                        <li id="email-content">
                            <i class="tio-online mr-2"></i>
                            '.$row['email'].'
                        </li>
                        <input type="text" id="email" class="form-control form-blur" style="display:none">
                        <li id="phone-content">
                            <i class="tio-android-phone-vs mr-2"></i>
                            '.format_phone($row['phone']).'
                        </li>
                        <input type="text" id="phone" class="form-control form-blur" style="display:none">
            ';
        }
    
        echo json_encode(['status'=>'success','html'=>$value]);
    }

    public function getOrderByIdCustomer($id){
        return $this->db->select('shop_customers.*,shop_orders.*, shop_payment_types.payment_code')->table('shop_customers')->join('shop_orders', 'shop_customers.id = shop_orders.customer_id')->join('shop_payment_types', 'shop_payment_types.id = shop_orders.payment_type_id')->where('customer_id', '=', $id)->get();
    }

   

}