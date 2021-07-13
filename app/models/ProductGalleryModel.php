<?php
/*
 * Kế thừa từ class Model
 *
 * */
class ProductGalleryModel extends Model {

    function tableFill(){
       return 'shop_product_gallery';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('shop_product_gallery')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('shop_product_gallery')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('shop_product_gallery')->where('id','=',$id)->delete();
    }
}