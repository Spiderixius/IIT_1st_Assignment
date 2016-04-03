<?php 

namespace App\Model;
use PDO;

class UploadImageModel { 

	public function uploadImage(){
		if (isset($_FILES['filename'], $_POST['title'])) {
	        if ($_FILES['filename'] != null && $_POST['title'] != null) {
		        $name = strtolower($_FILES['filename']['name']);
		        $temp = $_FILES['filename']['tmp_name'];
		        move_uploaded_file($temp, IMAGE_DIR . '/' . $name);
		        $filepath = "IMAGE_DIR . '/' . $name";
		        $title = $_POST['title'];

		        require CONTROLLER_DIR . '/dbConnecterController.php';
		        $statement = $db->prepare('INSERT INTO images (title, imagename, filepath) VALUES (?,?,?)');
				$statement->execute([$title, $name, $filepath]);

	            return true;
	        } else {
	        	return false;
	        }

		}
	}
}
