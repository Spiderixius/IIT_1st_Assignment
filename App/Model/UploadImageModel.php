<?php 

namespace App\Model;
use PDO;

class UploadImageModel { 

	public function uploadImage(){
		if (isset($_FILES['filename'])) {
	        $name = strtolower($_FILES['filename']['name']);
	        $temp = $_FILES['filename']['tmp_name'];
	        move_uploaded_file($temp, IMAGE_DIR . '/img' . $name);

            return true;
		}
	}
}
