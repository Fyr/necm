<?php
App::uses('AppController', 'Controller');
App::uses('SiteController', 'Controller');
class SitePagesController extends SiteController {
	public $name = 'SitePages';
	public $uses = array('Page');

	public function home() {
		$this->currMenu = 'Home';
	}
}
