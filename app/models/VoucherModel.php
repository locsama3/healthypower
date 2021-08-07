<?php
/*
 * Kế thừa từ class Model
 *
 * */
class VoucherModel extends Model {

    function tableFill(){
       return 'shop_vouchers';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('shop_vouchers')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('shop_vouchers')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('shop_vouchers')->where('id','=',$id)->delete();
    }

    public function show_voucher()
    {
        return $this->db->table('shop_vouchers')->whereIs('deleted_at', 'NULL')->get();
    }
    public function countRow($field, $condition,$value)
    {
        return $this->db->table('shop_vouchers')->where($field,$condition,$value)->count();
    }
    
    public function countRowWhere($user_id, $voucher_id){
        return $this->db->table('shop_customer_vouchers')->where('customer_id','=',$user_id)->where('voucher_id','=',$voucher_id)->count();
    }
    public function countRowById($user_id, $field, $condition, $value){
        return $this->db->table('shop_vouchers')->where('id','=',$user_id)->where($field, $condition, $value)->count();
    }
}