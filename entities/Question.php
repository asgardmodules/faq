<?php
namespace Coxis\Faq\Entities;

class Question extends \Coxis\Core\Entity {
	public static $properties = array(
		'question' => array(
			'required'=>true
		),
		'answer',
	);
	
	public static $relations = array(	
	);
	
	public static $behaviors = array(
		'Coxis\Behaviors\SortableBehavior',
	);
		
	public static $meta = array(
	);
	
	public function __toString() {
		return (string)$this->question;
	}
}