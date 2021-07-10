<?php
/*
 * Kế thừa từ class Model
 *
 * */
class PermissionModel extends Model {

    function tableFill(){
       return 'acl_permissions';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('acl_permissions')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('acl_permissions')->where('id','=',$id)->update($data);
    }

    function destroy($id)
    {
        $this->db->table('acl_permissions')->where('id','=',$id)->delete();
    }

    // user has permission
    function createUserPermission($data)
    {
        $this->db->table('acl_user_has_permissions')->insert($data);
    }

    function editUserPermission($id, $data)
    {
        $this->db->table('acl_user_has_permissions')->where('id','=',$id)->update($data);
    }

    function getUserPermission($user_id)
    {
        return $this->db->table('acl_user_has_permissions')->where('user_id','=',$user_id)->get();
    }

    function destroyUserPermission($id)
    {
        $sql = "DELETE FROM acl_user_has_permissions WHERE id = '$id'";

        $this->db->query($sql);
    }
}