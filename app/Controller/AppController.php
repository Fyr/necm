<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {
    public $paginate;
	public $aNavBar = array(), $aBottomLinks = array(), $currMenu, $currLink;
    
    public function __construct($request = null, $response = null) {
	    $this->_beforeInit();
	    parent::__construct($request, $response);
	    $this->_afterInit();
	}
	
	protected function _beforeInit() {
	    // Add here components, models, helpers etc that will be also loaded while extending child class
	}

	protected function _afterInit() {
	    // after construct actions here
	}
	
    public function isAuthorized($user) {
	    // fdebug("App:isAuthorized!\r\n");
		return true;
	}
}
