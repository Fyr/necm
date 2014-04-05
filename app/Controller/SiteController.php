<?php
App::uses('AppController', 'Controller');
class SiteController extends AppController {
	public $name = 'Site';
	
	public function _beforeInit() {
		$this->components = array_merge(array('Table.PCTableGrid'), $this->components);
	    $this->helpers = array_merge(array('Html', 'Form', 'Media', 'ArticleVars'), $this->helpers);
	    $this->uses = array_merge(array('Media.Media', 'Category', 'Subcategory', 'News'), $this->uses);
	    
		$this->aNavBar = array(
			'Home' => array('label' => __('Home'), 'href' => array('controller' => 'SitePages', 'action' => 'home')),
			'News' => array('label' => __('News'), 'href' => array('controller' => 'AdminContent', 'action' => 'index', 'News')),
			'Products' => array('label' => __('Products catalogue'), 'href' => array('controller' => 'AdminProducts', 'action' => 'index')),
			'AboutUs' => array('label' => __('About us'), 'href' => array('controller' => 'SitePages', 'action' => 'show', 'about-us.html')),
			'Contacts' => array('label' => __('Contacts'), 'href' => array('controller' => 'SiteContscts', 'action' => 'index'))
		);
		$this->aBottomLinks = $this->aNavBar;
	}
	
	protected function _getCurrMenu() {
		if ($this->request->controller == 'SitePages') {
			return 'AboutUs';
		}
		$curr_menu = strtolower(str_ireplace('Site', '', $this->request->controller)); // By default curr.menu is the same as controller name
		foreach($this->aNavBar as $currMenu => $item) {
			if (isset($item['submenu'])) {
				foreach($item['submenu'] as $_currMenu => $_item) {
					if (strtolower($_currMenu) === $curr_menu) {
						return $currMenu;
					}
				}
			}
		}
		return $curr_menu;
	}
	
	public function beforeFilter() {
	    $this->currMenu = $this->_getCurrMenu();
	    $this->currLink = $this->currMenu;
	}
	
	
	public function beforeRender() {
		parent::beforeRender();
		
		$this->set('aSlider', $this->Media->getObjectList('Slider'));
		$this->set('aCategories', $this->Category->getOptions('Category'));
		$this->set('aSubcategories', $this->Subcategory->find('all', array(
			'fields' => array('id', 'object_id', 'title', 'Category.id', 'Category.title'),
			'order' => 'object_id'
		)));
		$rndNews = $this->News->find('first', array('conditions' => array('published' => 1, 'featured' => 1)));
		$this->set('rndNews', $rndNews);
	}
}
