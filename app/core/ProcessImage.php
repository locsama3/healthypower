<?php 	
	class ProcessImage 
	{
	    public function checkImage($file = [], $uploadPath)
	    {
	        if(isset($file['name']) && isset($file['tmp_name']) && isset($file['size'])){
	            //Kiem tra hình ảnh và lấy hình ảnh cho vào folder upload
	            $permited  = array('jpg', 'jpeg', 'png', 'gif');

	            $file_name = $file['name'];
	            $file_size = $file['size'];
	            $file_temp = $file['tmp_name'];
	            
	            $div = explode('.', $file_name);
	            $file_ext = strtolower(end($div));
	            if ($file_size > 2048000) {
	                $alert = "<span class='error'>Kích thước của ảnh phải nhỏ hơn 2MB!</span>";
	                return $alert;
	            } 
	            elseif (in_array($file_ext, $permited) === false) 
	            {   
	                $alert = "<span class='error'>Bạn chỉ có thể tải lên các file sau: -".implode(', ', $permited)."</span>";
	                return $alert;
	            }
	            
	            $file_current = strtolower(reset($div));
	            $unique_image = $file_current.substr(md5(time()), 0, 5).'.'.$file_ext;
	            $uploaded_image = $uploadPath.$unique_image;
	            move_uploaded_file($file_temp,$uploaded_image);
	            return $unique_image;
	        }

	        return false;
	    }

	    public function del_upload($id, $path = '', $model = '', $field = '')
	    {
	        $del_upload = $this->$model->find($id);
	        $filePath = $path.$del_upload[$field];
	        if (file_exists($filePath)){
	            unlink($filePath);
	        }
	    }
	}
 ?>	