<?php
/*
 * Kế thừa từ class Model
 *
 * */
class UserModel extends Model {

    function tableFill(){
       return 'acl_users';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('acl_users')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('acl_users')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('acl_users')->where('id','=',$id)->delete();
    }

    public function countRow($field, $condition,$value)
    {
        return $this->db->table('acl_users')->where($field,$condition,$value)->count();
    }
    
    public function countRowWhere($user_id, $voucher_id){
        return $this->db->table('shop_customer_vouchers')->where('customer_id','=',$user_id)->where('voucher_id','=',$voucher_id)->count();
    }
    public function countRowById($user_id, $field, $condition, $value){
        return $this->db->table('acl_users')->where('id','=',$user_id)->where($field, $condition, $value)->count();
    }
    public function findUserInvalid($field, $password){
        return $this->db->table('acl_users')->where('email','=',$field)->where('password', '=', $password)->count();
    }
}