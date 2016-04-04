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

		if (isset($_SESSION['username'])) {
			require VIEW_DIR . '/pages/upload.php';
		} else{
			header ('Location: /');
		}
	}

	public function deleteImage(){
		$this->galleryVar->deleteImage();
	}

	public function uploadImages(){
		$info = $this->galleryVar->uploadImage();
		if ($info) {
			header ('Location: /gallery');
		} else {
			echo "Image cannot be added";
			echo "<br><a href='/showUpload'> Go back to upload page to try again.";
		}
	}
}