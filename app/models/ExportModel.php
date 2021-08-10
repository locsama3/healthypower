<?php
/*
 * Kế thừa từ class Model
 *
 * */   
class ExportModel extends Model {

    function tableFill()
    {
       return 'shop_exports';
    }

    function fieldFill()
    {
        return '*';
    }

    function primaryKey()
    {
        return 'id';
    }

    function create($data)
    {
        $this->db->table('shop_exports')->insert($data);
        return $this->db->lastId();
    }

    function edit($id, $data)
    {
        $this->db->table('shop_exports')->where('id','=',$id)->update($data);
    }

    public function destroy($id)
    {
        $this->db->table('shop_exports')->where('id','=',$id)->delete();
    }

    function exportInfo($id) 
    {
        return $this->db->select('a.id, b.export_date, c.quantity, c.unit_price, c.product_id')
            ->table('shop_stores a')
            ->join('shop_exports b', 'a.id = b.store_id')->join('shop_export_detail c', 'b.id = c.export_id')
            ->where('c.product_id', '=', $id)->where('a.status', '=', '1')->get();
    }

    function bestseller($startDate, $endDate) {
        return $this->db->select('a.id, b.export_date, sum(c.quantity) as TongBan, c.unit_price, c.product_id')
            ->table('shop_stores a')
            ->join('shop_exports b', 'a.id = b.store_id')->join('shop_export_detail c', 'b.id = c.export_id')
            ->where('a.status', '=', '1')->where('b.export_date', '>=', $startDate)->where('b.export_date', '<=', $endDate)
            ->groupBy('c.product_id')->orderBy('sum(c.quantity)', 'DESC')->limit(10, 0)->get();
    }
    public function getExport(){
        return $this->db->table('shop_exports')->select('shop_exports.*, acl_users.fullname, shop_stores.store_name')
               ->join('shop_stores', 'shop_stores.id = shop_exports.store_id')
               ->join('acl_users', 'acl_users.id = shop_exports.employee_id')
               ->orderBy('shop_exports.id','DESC')
               ->get();
    }
}