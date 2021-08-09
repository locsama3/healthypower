<?php
/*
 * Kế thừa từ class Model
 *
 * */
class ProductReviewModel extends Model {

    function tableFill(){
       return 'shop_product_reviews';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    function create($data)
    {
        $this->db->table('shop_product_reviews')->insert($data);
    }

    function edit($id, $data)
    {
        $this->db->table('shop_product_reviews')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('shop_product_reviews')->where('id','=',$id)->delete();
    }

    public function getAvgRating($prod_id)
    { 
        return $this->db->table('shop_product_reviews')->select('AVG(rating) as danhgia')->where('product_id', '=', $prod_id)->get();
    }

    public function getProducts()
    {
        return $this->db->table('shop_products as a')->join('shop_product_reviews as b', 'a.id = b.product_id')->select('a.id, a.product_name, a.image, COUNT(b.product_id) as soluotrv, AVG(rating) as danhgia')->orderBy('a.id', 'desc')->groupBy('b.product_id')->get();
    }

    public function childComment($parent_id)
    {
        return $this->db->table('shop_product_reviews as a')->join('tbl_users as b','a.cus_id = b.user_id')->where('parent_id','=',$parent_id)->orderBy('id_bl', 'desc')->select('a.*, b.*, a.create_at as comment_day')->get();
    }

    public function getAllComment($prod_id)
    {
        return $this->db->table('shop_product_reviews as a')->join('shop_customers as b','a.customer_id = b.id')->where('product_id','=',$prod_id)->whereIs('parent_id','NULL')->whereIs('comment','NOT NULL')->orderBy('a.id', 'desc')->select('a.*, b.*, a.created_at as comment_day, a.id as id_bl, a.status as cmt_status')->get();
    }

    // clients
    public function getComment($prod_id)
    {
        return $this->db->table('shop_product_reviews as a')->join('shop_customers as b','a.customer_id = b.id')->where('product_id','=',$prod_id)->where('a.status', '=', 1)->whereIs('parent_id','NULL')->whereIs('comment','NOT NULL')->orderBy('a.id', 'desc')->select('a.*, b.*, a.created_at as comment_day, a.id as id_bl, a.status as cmt_status')->get();
    }

    public function getRepComment($parent_id)
    {
        return $this->db->table('shop_product_reviews as a')->join('shop_customers as b','a.customer_id = b.id')->where('parent_id','=',$parent_id)->where('a.status', '=', 1)->whereIs('comment','NOT NULL')->orderBy('a.id', 'desc')->select('a.*, b.*, a.created_at as comment_day, a.id as id_bl')->get();
    }
}