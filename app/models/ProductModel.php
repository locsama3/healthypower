<?php
/*
 * Kế thừa từ class Model
 *
 * */
class ProductModel extends Model {

    function tableFill(){
       return 'shop_products';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
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

    public function deleteAt($id, $data)
    {
        $this->db->table('shop_products')->whereIN('id',"($id)")->update($data);
    }


    function findOne($field, $value) {
        return $this->db->table('shop_products')->where($field,'=',$value)->first();
    }
    public function updateQuantity($id, $quantity, $compare){
        $sql = "UPDATE ".$this->tableFill()." SET quantity_per_unit = quantity_per_unit ".$compare." $quantity 
                WHERE id = $id";
        $this->db->query($sql);

    }
}