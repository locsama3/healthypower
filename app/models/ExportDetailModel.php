<?php
/*
 * Kế thừa từ class Model
 *
 * */   
class ExportDetailModel extends Model {

    function tableFill()
    {
       return 'shop_export_detail';
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
        $this->db->table('shop_export_detail')->insert($data);
        return $this->db->lastId();
    }

    function edit($id, $data)
    {
        $this->db->table('shop_export_detail')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('shop_export_detail')->where('id','=',$id)->delete();
    }

    public function getExportDetail($condition){
        return $this->db->table('shop_export_detail')->select('shop_export_detail.*, shop_products.product_name')
               ->join('shop_products', 'shop_products.id = shop_export_detail.product_id')
               ->where('export_id', '=', $condition)->get();
    }
}