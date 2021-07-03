<?php
/*
 * Kế thừa từ class Model
 *
 * */
class PaymentTypeModel extends Model {

    function tableFill(){
       return 'shop_payment_types';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('shop_payment_types')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('shop_payment_types')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('shop_payment_types')->where('id','=',$id)->delete();
    }
}