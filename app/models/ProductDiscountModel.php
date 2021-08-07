<?php
/*
 * Kế thừa từ class Model
 *
 * */
class ProductDiscountModel extends Model {

    function tableFill(){
       return 'shop_product_discounts';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('shop_product_discounts')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('shop_product_discounts')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('shop_product_discounts')->where('id','=',$id)->delete();
    }
}