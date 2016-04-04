<?php 

namespace App\Model;
use PDO;

class UploadImageModel { 

	public function uploadImage(){
		if (isset($_FILES['filename'], $_POST['title'])) {
	        if ($_FILES['filename'] != null && $_POST['title'] != null) {
		        $image= addslashes($_FILES['filename']['tmp_name']);
				$name= addslashes($_FILES['filename']['name']);
				$image= file_get_contents($image);
				$image= base64_encode($image);	
				$title = filter_var( $_POST['title'], FILTER_SANITIZE_STRING);

				try {
					require CONTROLLER_DIR . '/dbConnecterController.php';
			
					$query = 'INSERT INTO images (title, img) VALUES (?,?)';
					$parameters = array($title, $image);
					$statement = $db->prepare($query);
					$statement->execute($parameters);
			
					header ('Location: /gallery');
				
				} catch(Exception $e) {
					echo $e->getMessage();
					die("Database has died");
				}		
	            return true;
	        } else {
	        	return false;
	        }
		}
	}

	public function deleteImage(){
		try{		
			if(!is_numeric($_POST['id'])){
			} else {
				$id = $_POST['id'];
				require CONTROLLER_DIR . '/dbConnecterController.php';							
				$statement = $db->prepare("DELETE FROM images WHERE id = :id");
				$statement->bindParam(':id', $id , PDO::PARAM_INT);
				$statement->execute();
				header ('Location: /gallery');		
			}			
			
		} catch(Exception $e){
			echo $e->getMessage();	
		}
	}


}
