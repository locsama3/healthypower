<?php
/*
 * Kế thừa từ class Model
 *
 * */   
class ProductViewModel extends Model {

    function tableFill()
    {
       return 'shop_product_viewed';
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
        $this->db->table('shop_product_viewed')->insert($data);
        return $this->db->lastId();
    }

    function edit($id, $data)
    {
        $this->db->table('shop_product_viewed')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('shop_product_viewed')->where('id','=',$id)->delete();
    }
}