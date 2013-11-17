<?php
namespace App\Faq;

class Bundle extends \Coxis\Core\BundleLoader {
	public function run() {
		\App\Admin\Libs\AdminMenu::instance()->menu[0]['childs'][] = array('label' => 'FAQ', 'link' => 'faq');
		\App\Admin\Libs\AdminMenu::instance()->home[] = array('img'=>\URL::to('faq/icon.svg'), 'link'=>'faq', 'title' => __('FAQ'), 'description' => __('All the questions'));
		parent::run();
	}
}
return new Bundle;