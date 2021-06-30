<?php
/*
 * Kế thừa từ class Model
 *
 * */
class BlogModel extends Model {

    function tableFill(){
       return 'tbl_blogs';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('tbl_blogs')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('tbl_blogs')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('tbl_blogs')->where('id','=',$id)->delete();
    }
}