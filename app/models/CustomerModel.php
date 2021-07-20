<?php
/*
 * Kế thừa từ class Model
 *
 * */
class CustomerModel extends Model {

    function tableFill(){
       return 'shop_customers';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('shop_customers')->insert($data);
        return $this->db->lastId();
    }

    function edit($id, $data)
    {
        $this->db->table('shop_customers')->where('id','=',$id)->update($data);
    }

    public function deleteAt($id, $data)
    {
        $this->db->table('shop_customers')->whereIN('id',"($id)")->update($data);
    }

    function findOne($field, $value) {
        return $this->db->table('shop_customers')->where($field,'=',$value)->first();
    }

    public function countRow($field, $value)
    {
        return $this->db->table('shop_customers')->where($field,'=',$value)->count();
    }
}