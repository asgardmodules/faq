<?php
/**
@Prefix('faq')
*/
class QuestionController extends \Asgard\Core\Controller {
	/**
	@Route('')
	*/
	public function indexAction($request) {
		$this->questions = Question::all();
	}
}