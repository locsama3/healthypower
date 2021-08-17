<?php
/*
 * Kế thừa từ class Model
 *
 * */   
class ImportDetailModel extends Model {

    function tableFill()
    {
       return 'shop_import_detail';
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
        $this->db->table('shop_import_detail')->insert($data);
        return $this->db->lastId();
    }

    function edit($id, $data)
    {
        $this->db->table('shop_import_detail')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('shop_import_detail')->where('id','=',$id)->delete();
    }
    public function getProduct($id){
        return $this->db->table('shop_import_detail')->where('product_id', '=', $id)->orderBy('quantity', 'ASC')->limit(1)->get();
    }
    public function updateQuantity($id, $quantity, $compare){
        $sql = "UPDATE ".$this->tableFill()." SET quantity = quantity ".$compare." $quantity 
                WHERE id = $id";
        $this->db->query($sql);
    }
    public function getImportDetail($condition){
        return $this->db->table('shop_import_detail')->select('shop_import_detail.*, shop_products.product_name')
               ->join('shop_products', 'shop_products.id = shop_import_detail.product_id')
               ->where('import_id', '=', $condition)->get();
    }
}