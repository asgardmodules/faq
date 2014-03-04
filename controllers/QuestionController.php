<?php
/**
@Prefix('faq')
*/
class QuestionController extends \Coxis\Core\Controller {
	/**
	@Route('')
	*/
	public function indexAction($request) {
		$this->questions = Question::all();
	}
}