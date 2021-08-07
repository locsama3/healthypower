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

    public function show()
    {
        return $this->db->table('tbl_blogs_categories');
    }

    function get_position()
    {
        return $this->db->table('tbl_blogs_categories')->select("COUNT(*) as this_position")->first();
    }

    function get_position_child($id)
    {
        return $this->db->table('tbl_blogs_categories')->select("COUNT(*) as this_position")->where('parent_id', '=', $id)->first();
    }

    function get_parent()
    {
        return $this->db->table('tbl_blogs_categories')->whereIs('parent_id', 'NULL')->get();
    }

    function get_children()
    {
        return $this->db->table('tbl_blogs_categories')->whereIs('parent_id', 'NOT NULL')->get();
    }

    // model clients
    function find_by_slug($slug)
    {
        return $this->db->table('tbl_blogs_categories')->whereLike('slug', $slug)->first();
    }
}