<?php
namespace App\Controller;
require MODEL_DIR . '/UploadImageModel.php';

class GalleryController {

	private $galleryVar;

	public function __construct(\App\Model\UploadImageModel $galleryVar){
		$this->galleryVar = $galleryVar;
	}

	public  function showGallery(){
		$title = 'Gallery';

		if (isset($_SESSION['username'])) {
			require VIEW_DIR . '/pages/gallery.php';
		} else{
			header ('Location: /');
		}
		
	}

	public function showUploadImagePage(){
		$title = 'Upload';

		require VIEW_DIR . '/pages/upload.php';
	}

	public function showUpload(){

	}

	public function uploadImages(){
		$info = $this->galleryVar->uploadImage();
		if ($info) {
			echo "Image added";
			echo "<br><a href='/gallery'> Go back to user list";
		} else {
			die();
		}
	}
}