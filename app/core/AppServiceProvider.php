<?php
class AppServiceProvider extends ServiceProvider {
    public function boot(){
        $header_blog_categories = $this->db->table('tbl_blogs_categories')->whereIs('parent_id', 'NULL')->orderBy('position', 'ASC')->get();

        $data['header_blog_categories'] = $header_blog_categories;
        View::share($data);
    }
}