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
    }

    function edit($id, $data)
    {
        $this->db->table('shop_customers')->where('id','=',$id)->update($data);
    }

    public function deleteAt($id, $data)
    {
        $this->db->table('shop_customers')->whereIN('id',"($id)")->update($data);
    }

    public function show()
    {
        return $this->db->table('shop_customers');
    }
}