<?php
/*
 * Kế thừa từ class Model
 *
 * */
class RoleModel extends Model {

    function tableFill(){
       return 'acl_roles';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('acl_roles')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('acl_roles')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('acl_roles')->where('id','=',$id)->delete();
    }

    // user has role
    public function createUserRole($data)
    {
        $this->db->table('acl_user_has_roles')->insert($data);
    }

    function editUserRole($id, $data)
    {
        $this->db->table('acl_user_has_roles')->where('id','=',$id)->update($data);
    }

}