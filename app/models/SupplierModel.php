<?php
/*
 * Kế thừa từ class Model
 *
 * */
class SupplierModel extends Model {

    function tableFill(){
       return 'shop_suppliers';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('shop_suppliers')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('shop_suppliers')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('shop_suppliers')->where('id','=',$id)->delete();
    }
}