<?php
App::uses('AppHelper', 'View/Helper');
class ArticleVarsHelper extends AppHelper {
	public $helpers = array('Media');

	function init($aArticle, $objectType, &$url, &$title, &$teaser = '', &$src = '', &$size = 'noresize', &$featured = false, &$id = '') {
		$id = $aArticle[$objectType]['id'];
		$url = '/'.$objectType.'/'.$id; //  $this->Router->url($aArticle);
		$title = $aArticle[$objectType]['title'];
		$teaser = nl2br($aArticle[$objectType]['teaser']);
		$src = '';
		$featured = false;
		if (isset($aArticle['Media'][0])) {
			$media = $aArticle['Media'][0];
			$file = $media['file'].$media['ext'];
			/*
			if ($aArticle['Article']['object_type'] == 'products') {
				$file.= '.png';
			}
			*/
			$src = $this->Media->imageUrl($media['object_type'], $media['id'], $size, $file);
			$featured = $aArticle[$objectType]['featured'];
		}
	}

}
