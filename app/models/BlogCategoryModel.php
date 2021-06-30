<?php
/*
 * Kế thừa từ class Model
 *
 * */
class BlogCategoryModel extends Model {

    function tableFill(){
       return 'tbl_blogs_categories';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('tbl_blogs_categories')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('tbl_blogs_categories')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('tbl_blogs_categories')->where('id','=',$id)->delete();
    }
}