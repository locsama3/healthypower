<?php 	
	class ProcessImage 
	{
	    static function checkImage($file = [], $uploadPath)
	    {
	        if(!empty($file['name']) && !empty($file['tmp_name']) && !empty($file['size'])){
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

	    static function del_upload($id, $path = '', $model = '', $field = '')
	    {
	    	if (file_exists(_DIR_ROOT.'/app/models/'.$model.'.php')){
	            require_once _DIR_ROOT.'/app/models/'.$model.'.php';
	            if (class_exists($model)){
	                $Inc_model = new $model();
	            }
	        }

	        $del_upload = $Inc_model->find($id);
	        $filePath = $path.$del_upload[$field];
	        if (file_exists($filePath)){
	            unlink($filePath);
	        }
	    }

		static function uploadImageBySrc($file, $uploadPath = 'public/uploads/'){
			$image_parts = explode(";base64,", $file);
			$image_type_aux = explode("image/", $image_parts[0]);
			$image_type = $image_type_aux[1];
			$image_base64 = base64_decode($image_parts[1]);
			$name = md5(uniqid()) . '.png';
			$uploadPath = $uploadPath . $name;
			file_put_contents($uploadPath, $image_base64);
			return $name;
		}
	}
 ?>	