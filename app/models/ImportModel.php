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
    public function getImport(){
        return $this->db->table('shop_imports')->select('shop_imports.*, acl_users.fullname, shop_stores.store_name')
               ->join('shop_stores', 'shop_stores.id = shop_imports.store_id')
               ->join('acl_users', 'acl_users.id = shop_imports.employee_id')
               ->orderBy('shop_imports.id','DESC')
               ->get();
    }
}