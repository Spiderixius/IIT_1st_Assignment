<?php
namespace App\Controller;

class GalleryController {
	public function __construct(){
	}
	
	public  function showGallery(){
		$title = 'Gallery';

		require VIEW_DIR . '/pages/gallery.php';
	}
}