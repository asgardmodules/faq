<?php
namespace Asgard\Faq\Entities;

class Question extends \Asgard\Core\Entity {
	public static $properties = array(
		'question' => array(
			'required'=>true
		),
		'answer',
	);
	
	public static $relations = array(	
	);
	
	public static $behaviors = array(
		'Asgard\Behaviors\SortableBehavior',
	);
		
	public static $meta = array(
	);
	
	public function __toString() {
		return (string)$this->question;
	}
}