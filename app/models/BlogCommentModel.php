<?php
/*
 * Kế thừa từ class Model
 *
 * */
class BlogCommentModel extends Model {

    function tableFill(){
       return 'tbl_blogs_comments';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('tbl_blogs_comments')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('tbl_blogs_comments')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('tbl_blogs_comments')->where('id','=',$id)->delete();
    }

    public function getBlogs()
    {
        return $this->db->table('tbl_blogs as a')->join('tbl_blogs_comments as b', 'a.id = b.blog_id')->select('a.id, a.title, a.thumbnail, a.slug, COUNT(b.blog_id) as soluotbl')->orderBy('a.id', 'desc')->groupBy('b.blog_id')->get();
    }

    public function getAllComment($blog_id)
    {
        return $this->db->table('tbl_blogs_comments as a')->join('shop_customers as b','a.customer_id = b.id')->where('blog_id','=',$blog_id)->whereIs('parent_id','NULL')->orderBy('a.id', 'desc')->select('a.*, b.*, a.created_at as comment_day, a.id as id_bl, a.comment_status as cmt_status')->get();
    }

    // clients
    public function getComment($blog_id)
    {
        return $this->db->table('tbl_blogs_comments as a')->join('shop_customers as b','a.customer_id = b.id')->where('blog_id','=',$blog_id)->where('a.comment_status', '=', 1)->whereIs('parent_id','NULL')->orderBy('a.id', 'desc')->select('a.*, b.*, a.created_at as comment_day, a.id as id_bl, a.comment_status as cmt_status')->get();
    }

    public function getRepComment($parent_id)
    {
        return $this->db->table('tbl_blogs_comments as a')->join('shop_customers as b','a.customer_id = b.id')->where('parent_id','=',$parent_id)->where('a.comment_status', '=', 1)->orderBy('a.id', 'desc')->select('a.*, b.*, a.created_at as comment_day, a.id as id_bl, a.comment_status as cmt_status')->get();
    }
}