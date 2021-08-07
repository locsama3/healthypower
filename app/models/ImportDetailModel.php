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
}