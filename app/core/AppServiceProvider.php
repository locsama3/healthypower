<?php
class AppServiceProvider extends ServiceProvider {
    public function boot(){

        $header_blog_categories = $this->db->table('tbl_blogs_categories')->whereIs('parent_id', 'NULL')->orderBy('position', 'ASC')->get();

        $data['header_blog_categories'] = $header_blog_categories;

        $data['list_prod_cates'] = $this->db->table('shop_categories')->get();
        $data['list_suppliers'] = $this->db->table('shop_suppliers')->limit(8,0)->get();
        View::$dataShare = $data;
    }
}