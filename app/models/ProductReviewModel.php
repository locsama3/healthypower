<?php
/*
 * Kế thừa từ class Model
 *
 * */
class ProductReviewModel extends Model {

    function tableFill(){
       return 'shop_product_reviews';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('shop_product_reviews')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('shop_product_reviews')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('shop_product_reviews')->where('id','=',$id)->delete();
    }
}