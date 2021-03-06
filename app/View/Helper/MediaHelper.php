<?php
App::uses('AppHelper', 'View/Helper');
class MediaHelper extends AppHelper {
	private $MediaPath;
	
	public function __construct(View $view, $settings = array()) {
		parent::__construct($view, $settings);
		
		App::uses('MediaPath', 'Media.Vendor');
		$this->MediaPath = new MediaPath();
	}
	
	function imageUrl($mediaRow, $size) {
		$media = $mediaRow['Media'];
		return $this->MediaPath->getImageUrl($media['object_type'], $media['id'], $size, $media['file'].$media['ext']);
	}
}
