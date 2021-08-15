<?php
/*
 * Kế thừa từ class Model
 *
 * */
class AdminHasPermissionModel extends Model {

    function tableFill(){
       return 'acl_user_has_permissions';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('acl_user_has_permissions')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('acl_user_has_permissions')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('acl_user_has_permissions')->where('id','=',$id)->delete();
    }

}