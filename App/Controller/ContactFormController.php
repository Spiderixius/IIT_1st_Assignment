<?php
namespace App\Controller;

class GalleryController {
	public function __construct(){
	}

	public  function contactMe(){
		$title = 'Contact Me';

		require VIEW_DIR . '/pages/contactform.php';
	}
}