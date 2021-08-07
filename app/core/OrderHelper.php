<?php 	
class OrderHelper 
{
    static function totalPrice($array, $shipping_fee){
        $total = 0;
        $newArray = [];
        $arrPriceChange = [];
        foreach($array as $data){
            //kiểm tra có mã giảm không
            if($data['discount_amount'] != 0){
                $data['unit_price'] -= $data['discount_amount'];
            }
            if($data['discount_percentage'] != 0){
                $data['unit_price'] -= ($data['unit_price']*$data['discount_percentage'])/100;
            }
            $total += $data['unit_price']*$data['quantity'];
            // tiến hành push giá trị vừa thay đổi (unit_price) vào mảng mới
            array_push($arrPriceChange, $data['unit_price']);
        }
        $total += $shipping_fee;
        $newArray = [$total, $arrPriceChange];
        return $newArray;
    }
    
    // Hàm kiểm tra trạng thái đơn hàng
    static function status($data){
        $newString = "";
        if($data==0){
            $newString .= '<span class="badge badge-soft-dark">
                                <span class="legend-indicator bg-dark"></span>Đang chờ xử lý
                            </span>'; 
        }elseif($data == 1){
            $newString .= '<span class="badge badge-soft-warning">
                                <span class="legend-indicator bg-warning"></span>Đang xử lý
                            </span>'; 
            
        }elseif($data == 2){
            $newString .= '<span class="badge badge-soft-primary">
                                <span class="legend-indicator bg-primary"></span>Đang giao
                            </span>'; 
        }elseif($data == 3){
            $newString .= '<span class="badge badge-soft-success">
                                <span class="legend-indicator bg-success"></span>Đã hoàn thành
                            </span>'; 
        }else{
            $newString .= '<span class="badge badge-soft-danger">
                                <span class="legend-indicator bg-danger"></span>Đã hủy
                            </span>'; 
        }
        return $newString;
    
    }
}
 ?>	