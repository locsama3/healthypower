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
        return $this->db->lastId();
    }

    function edit($id, $data)
    {
        $this->db->table('tbl_blogs')->where('id','=',$id)->update($data);
    }

    public function deleteAt($id, $data)
    {
        $this->db->table('tbl_blogs')->whereIN('id',"($id)")->update($data);
    }

    function destroy($id)
    {
        $this->db->table('tbl_blogs')->where('id','=',$id)->delete();
    }

    function get_list()
    {
        return $this->db->table('tbl_blogs as a')->join('tbl_blogs_details as b', 'a.id = b.blog_id')->join('tbl_blogs_categories as c', 'b.cate_id = c.id')->select("a.*, GROUP_CONCAT(b.cate_id SEPARATOR ',') as cate_ids, b.main_cate, GROUP_CONCAT(c.name SEPARATOR ',') as category_name")->groupBy('a.id')->get();
    }

    function create_details($data)
    {
        $this->db->table('tbl_blogs_details')->insert($data);
    }

    function update_details($id, $data)
    {
        $this->db->table('tbl_blogs_details')->where('id','=',$id)->update($data);
    }

    function destroyBlogDetail($id)
    {
        $sql = "DELETE FROM tbl_blogs_details WHERE id = '$id'";

        $this->db->query($sql);
    }

    function get_detail_by_id($id)
    {
        return $this->db->table('tbl_blogs_details')->where('blog_id', '=', $id)->get();
    }

    function get_cc($id)
    {
        $sql = "SELECT * FROM tbl_blogs_details WHERE blog_id = ".$id;

        $this->db->query($sql);
    }

    // clients
    function get_blogs_by_cate($cate_id)
    {
        return $this->db->table('tbl_blogs as a')->join('tbl_blogs_details as b', 'a.id = b.blog_id')->where('b.cate_id', '=', $cate_id)->orderBy('a.id', "DESC")->get();
    }

    function get_most_view()
    {
        return $this->db->table('tbl_blogs')->orderBy('view', 'DESC')->where('status', '=', 1)->limit(5)->get();
    }

    function get_latest()
    {
        return $this->db->table('tbl_blogs')->orderBy('id', 'DESC')->where('status', '=', 1)->limit(3)->get();
    }

    function get_blogs_by_slug($slug)
    {
        return $this->db->table('tbl_blogs')->whereLike('slug', $slug)->first();
    }

    function get_show_list()
    {
        return $this->db->table('tbl_blogs')->where('status', '=', 1)->get();
    }

    function count_blogs()
    {
        $result = $this->db->table('tbl_blogs')->select('count(*) as total')->where('status', '=', 1)->first();

        if($result){
            return $result['total'];
        }

        return 0;
    }   

    function get_all_post($limit, $start) 
    {
        return $this->db->table('tbl_blogs')->where('status', '=', 1)->limit($start, $limit)->get();
    }

}