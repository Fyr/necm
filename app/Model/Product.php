<?
App::uses('AppModel', 'Model');
App::uses('Article', 'Article.Model');
class Product extends Article {
	
	var $hasOne = array(
		'Media' => array(
			'foreignKey' => 'object_id',
			'conditions' => array('Media.object_type' => 'Product', 'Media.main' => 1),
			'dependent' => true
		)
	);
	
	protected $objectType = 'Product';
	
}
