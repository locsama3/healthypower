<?php
/*Base Model*/
abstract class Model extends Database {
    protected $db;

    function __construct(){
        $this->db = new Database();
    }

    abstract function tableFill();

    abstract function fieldFill();

    abstract function primaryKey();

    //Lấy tất cả bản ghi
    public function all(){
        $tableName = $this->tableFill();
        $fieldSelect = $this->fieldFill();
        if (empty($fieldSelect)){
            $fieldSelect = '*';
        }
        $sql = "SELECT $fieldSelect FROM $tableName";
        $query = $this->db->query($sql);
        if (!empty($query)){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }

    //Lấy 1 bản ghi
    public function find($id){
        $tableName = $this->tableFill();
        $fieldSelect = $this->fieldFill();
        $primaryKey = $this->primaryKey();

        if (empty($fieldSelect)){
            $fieldSelect = '*';
        }

        $sql = "SELECT $fieldSelect FROM $tableName WHERE $primaryKey=$id";
        $query = $this->db->query($sql);
        if (!empty($query)){
            return $query->fetch(PDO::FETCH_ASSOC);
        }

        return false;

    }

    // lấy 1 bản ghi cho phép nhiều điều kiện
    function findOne($conditions) 
    {
        $tableName = $this->tableFill();
        $fieldSelect = $this->fieldFill();

        if (empty($fieldSelect)){
            $fieldSelect = '*';
        }

        foreach($conditions as $condition) { 
            $arr = explode(':', $condition);
            $field = trim($arr[0]);
            $value = trim($arr[1]);
        
            $this->db->where($field, '=', $value);
        }
        
        return $this->db->select($fieldSelect)->table($tableName)->first();
    }

    // lấy tất cả bản ghi cho phép nhiều điều kiện
    function findByField ($conditions, $orderBy = '', $limit = '') {
        $tableName = $this->tableFill();
        $fieldSelect = $this->fieldFill();

        if (empty($fieldSelect)){
            $fieldSelect = '*';
        }

        $arrayCompare = [
            '<=>', '>=' , '<=', '!=', '>', '<' , ':', '{in}'
        ];
        $compare = '';

        foreach($conditions as $condition) {
            foreach ($arrayCompare as $comp) {
                $find = strpos($condition, $comp);
                if ($find != false) {
                    $compare = $comp;
                    break;
                }
            } 

            $arr = explode($compare, $condition);
            $field = trim($arr[0]);
            $value = trim($arr[1]);

            if ($compare == ':') {
                $compare = '=';
            }

            if ($compare == '!=') {
                $compare = '<>';
            }

            if ($compare == '{in}') {
                $this->db->whereIn($field, "($value)");
                continue;
            }

            if ($compare == '<=>') {
                $this->db->whereLike($field, "%$value%");
                continue;
            }
        
            $this->db->where($field, $compare, $value);
        }

        if (!empty($orderBy)) {
            $arr = explode(':', $orderBy);
            $field = trim($arr[0]);
            $type = trim($arr[1]);

            $this->db->orderBy($field, $type);
        }

        if (!empty($limit)) {
            $arr = explode(':', $limit);
            $number = trim($arr[0]);
            $offset = trim($arr[1]);

            $this->db->limit($number, $offset);
        }
        
        return $this->db->select($fieldSelect)->table($tableName)->get();
    }

    // Đếm bản ghi cho phép nhiều điều kiện
    function countIf($conditions) {
        $tableName = $this->tableFill();
        $fieldSelect = $this->fieldFill();

        if (empty($fieldSelect)){
            $fieldSelect = '*';
        }

        $arrayCompare = [
            '<=>', '>=' , '<=', '!=', '>', '<' , ':', '{in}'
        ];
        $compare = '';

        foreach($conditions as $condition) {
            foreach ($arrayCompare as $comp) {
                $find = strpos($condition, $comp);
                if ($find != false) {
                    $compare = $comp;
                    break;
                }
            } 

            $arr = explode($compare, $condition);
            $field = trim($arr[0]);
            $value = trim($arr[1]);

            if ($compare == ':') {
                $compare = '=';
            }

            if ($compare == '!=') {
                $compare = '<>';
            }

            if ($compare == '{in}') {
                $this->db->whereIn($field, "($value)");
                continue;
            }

            if ($compare == '<=>') {
                $this->db->whereLike($field, "%$value%");
                continue;
            }
        
            $this->db->where($field, $compare, $value);
        }
        
        return $this->db->select($fieldSelect)->table($tableName)->count();
    }
 
}