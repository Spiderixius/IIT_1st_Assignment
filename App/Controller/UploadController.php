<?php
namespace App\Controller;

class UploadController {
	public function __construct(){
	}

	public  function uploadImage(){
		$title = 'Upload';

		require VIEW_DIR . '/pages/upload.php';
	}
}