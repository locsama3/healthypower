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
}