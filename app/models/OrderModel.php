<?php
/*
 * Kế thừa từ class Model
 *
 * */
class OrderModel extends Model {

    function tableFill(){
       return 'shop_orders';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('shop_orders')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('shop_orders')->where('id','=',$id)->update($data);
    }
    public function editStatus($id, $content){
        $this->db->table('shop_orders')->whereIN('id',"($id)")->update($content);
    }

    public function destroy($id)
    {
        $this->db->table('shop_orders')->where('id','=',$id)->delete();
    }
    public function getAllOrder(){
        return $this->db->table('shop_orders')->select('shop_customers.fullname, shop_customers.email, shop_orders.*,shop_payment_types.payment_code,shop_order_details.*')->join('shop_payment_types', 'shop_payment_types.id = shop_orders.payment_type_id')->join('shop_customers', 'shop_customers.id = shop_orders.customer_id')->join('shop_order_details', 'shop_orders.id = shop_order_details.order_id')->orderBy('shop_orders.id', 'DESC')->groupBy('shop_orders.id')->get();
    }
    public function getAllOrderDetail(){
        return $this->db->table('shop_orders')->select('shop_customers.fullname, shop_customers.email, shop_orders.*, shop_order_details.*')->join('shop_customers', 'shop_customers.id = shop_orders.customer_id')->join('shop_order_details', 'shop_orders.id = shop_order_details.order_id')->groupBy('shop_order_details.id')->get();
    }
    public function getOrderDetailById($id){
        return $this->db->select()->table('shop_order_details')->join('shop_products', 'shop_products.id = shop_order_details.product_id')->where('order_id','=',$id)->groupBy('shop_order_details.id')->get();
    }
    public function getOrderById($id){
        return $this->db->select()->table('shop_orders')->join('shop_customers', 'shop_orders.customer_id = shop_customers.id')->join('shop_payment_types', 'shop_payment_types.id = shop_orders.payment_type_id')->where('shop_orders.id', '=', $id)->groupBy('shop_orders.id')->get();
    }

    public function load($id){
        $value = "";
        $sql = "SELECT ship_address1 FROM ".self::tableFill()." WHERE id = $id";
        $result = $this->db->query($sql);
        while($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $value.= '
                        <span>'.$row['ship_address1'].'</span> 
                        <img class="avatar avatar-xss avatar-circle ml-1" src="'._WEB_ROOT.'\public\admin\vendor\flag-icon-css\flags\1x1\vn.svg" alt="Great Britain Flag">
            ';
        }
    
        echo json_encode(['status'=>'success','html'=>$value]);
    }

    public function getRow($id){
        $sql = "SELECT * FROM shop_orders WHERE customer_id = $id";
        $result = $this->db->query($sql);
        $row = $result->rowCount();
        return $row;
    }
    public function findHasGroupBy($value){
        return $this->db->table('shop_orders')->whereLike('order_date', date('Y-m'))->groupBy($value)->get();
    }
    
}