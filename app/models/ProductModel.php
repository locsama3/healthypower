<?php
/*
 * Kế thừa từ class Model
 *
 * */   
class ProductModel extends Model {

    function tableFill()
    {
       return 'shop_products';
    }

    function fieldFill()
    {
        return '*';
    }

    function primaryKey()
    {
        return 'id';
    }

    function create($data)
    {
        $this->db->table('shop_products')->insert($data);
        return $this->db->lastId();
    }

    function edit($id, $data)
    {
        $this->db->table('shop_products')->where('id','=',$id)->update($data);
    }

    function deleteAt($id, $data)
    {
        $this->db->table('shop_products')->whereIN('id',"($id)")->update($data);
    } 

    function updateQuantity($id, $quantity, $compare){
        $sql = "UPDATE ".$this->tableFill()." SET product_quantity = product_quantity ".$compare." $quantity 
                WHERE id = $id";
        $this->db->query($sql);
    }

    function count_product()
    {
        $result = $this->db->table('shop_products')->select('count(*) as total')->where('status', '=', 1)->whereIs('deleted_at', 'NULL')->first();

        if($result){
            return $result['total'];
        }

        return 0;
    }   
}