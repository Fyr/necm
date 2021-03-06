<?php
App::uses('AppController', 'Controller');
App::uses('SiteController', 'Controller');
class SiteProductsController extends SiteController {
	public $name = 'SiteProducts';
	public $uses = array('Product', 'Form.PMFormValue', 'Media.Media');

	public function index() {
	    if (isset($this->params->query['data']['search_text'])) {
		$searchText = $this->params->query['data']['search_text'];
		unset($this->params->query['data']['search_text']);
	    }
		$this->pageTitle = __('Products');
		$this->paginate = array(
			'conditions' => array('Product.published' => 1),
			'limit' => 10, 
			'order' => 'Product.created DESC'
		);
		$this->paginate['conditions'] = array_merge($this->paginate['conditions'], $this->postConditions($this->params->query['data']));
		$products = $this->paginate('Product');
		if (count($products) == 1) {
			$this->redirect(array('action' => 'view', Hash::get($products[0], 'Product.id')));
		}
		$this->set('products', $products);
	}
	
	public function view($id) {
		$article = $this->Product->findById($id);
		$this->pageTitle = $article['Product']['title'];
		$this->set('article', $article);
		$this->set('techParams', $this->PMFormValue->getValues('ProductParam', $id));
		$this->set('aMedia', $this->Media->getObjectList('Product', $id));
	}
}
