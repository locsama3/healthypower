<?php
class AppServiceProvider extends ServiceProvider {
    public function boot(){
        $data['list_prod_cates'] = $this->db->table('shop_categories')->get();
        $data['list_suppliers'] = $this->db->table('shop_suppliers')->limit(8,0)->get();
        View::$dataShare = $data;
    }
}