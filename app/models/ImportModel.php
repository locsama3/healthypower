<?php
/*
 * Kế thừa từ class Model
 *
 * */   
class ImportModel extends Model {

    function tableFill()
    {
       return 'shop_imports';
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
        $this->db->table('shop_imports')->insert($data);
        return $this->db->lastId();
    }

    function edit($id, $data)
    {
        $this->db->table('shop_imports')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('shop_imports')->where('id','=',$id)->delete();
    }

    function importInfo($id) 
    {
        return $this->db->select('a.id, b.import_date, c.quantity, c.unit_price, c.product_id')
            ->table('shop_stores a')
            ->join('shop_imports b', 'a.id = b.store_id')->join('shop_import_detail c', 'b.id = c.import_id')
            ->where('c.product_id', '=', $id)->where('a.status', '=', '1')->get();
    }
}