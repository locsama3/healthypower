<?php
/*
 * Kế thừa từ class Model
 *
 * */
class ProductCategoryModel extends Model {

    function tableFill(){
       return 'shop_categories';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('shop_categories')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('shop_categories')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('shop_categories')->where('id','=',$id)->delete();
    }
}