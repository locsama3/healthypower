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
}