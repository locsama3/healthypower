<?php
/*
 * Kế thừa từ class Model
 *
 * */
class AdminAccountModel extends Model {

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
        return $this->db->lastId();
    }

    function edit($id, $data)
    {
        return $this->db->table('acl_users')->where('id','=',$id)->update($data);
    }

    function destroy($id)
    {
        $this->db->table('acl_users')->where('id','=',$id)->delete();
    }

    function list_jobtitle()
    {
        return $this->db->table('acl_users')->select('job_title')->groupBy('job_title')->get();
    }

    function list_user()
    {
        return $this->db->table('acl_users as a')->join('acl_user_has_roles as b', 'a.id = b.user_id')->join('acl_roles as c', 'b.role_id = c.id')->join('acl_user_has_permissions as d', 'a.id = d.user_id')->select("a.*, b.role_id, c.display_name, GROUP_CONCAT(d.permission_id SEPARATOR ',') as permissions")->groupBy('a.id')->get();
    }

    function check_password($id, $old_password)
    {
        return $this->db->table('acl_users')->where('id', '=', $id)->where('password', '=', $old_password)->first();
    }

    function edit_password($id, $old_password, $data)
    {
        return $this->db->table('acl_users')->where('id', '=', $id)->where('password', '=', $old_password)->update($data);
    }

    function get_admin_by_code($code)
    {
        return $this->db->table('acl_users as a')->join('acl_user_has_roles as b', 'a.id = b.user_id')->join('acl_roles as c', 'b.role_id = c.id')->join('acl_user_has_permissions as d', 'a.id = d.user_id')->select("a.*, b.role_id, c.display_name, GROUP_CONCAT(d.permission_id SEPARATOR ',') as permissions")->where('a.code', '=', $code)->groupBy('a.id')->first();
    }
}