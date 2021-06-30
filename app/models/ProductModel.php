<?php
class ProductModel{
    public function getProductLists(){
        return [
            'Sản phẩm 1',
            'Sản phẩm 2',
            'Sản phẩm 3'
        ];
    }

    public function getDetail($id){
        $data = [
            'Sản phẩm 1',
            'Sản phẩm 2',
            'Sản phẩm 3'
        ];
        return $data[$id];
    }
}