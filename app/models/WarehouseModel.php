<?php
/*
 * Kế thừa từ class Model
 *
 * */
class WarehouseModel extends Model {

    function tableFill(){
       return 'shop_stores';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('shop_stores')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('shop_stores')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('shop_stores')->where('id','=',$id)->delete();
    }

    public function show()
    {
        return $this->db->table('shop_stores');
    }
}