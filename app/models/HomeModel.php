<?php
/*
 * Kế thừa từ class Model
 *
 * */
class HomeModel extends Model {

    function tableFill(){
       return 'province';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    public function getDetail($id){
        $data = [
            'Item 1',
            'Item 2',
            'Item 3'
        ];
        return $data[$id];
    }
}