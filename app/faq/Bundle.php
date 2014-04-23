<?php
namespace Asgard\Faq;

class Bundle extends \Asgard\Core\BundleLoader {
	public function run() {
		\App\Admin\Libs\AdminMenu::instance()->menu[0]['childs'][] = array('label' => 'FAQ', 'link' => 'faq');
		\App\Admin\Libs\AdminMenu::instance()->home[] = array('img'=>\Asgard\Core\App::get('url')->to('faq/icon.svg'), 'link'=>'faq', 'title' => __('FAQ'), 'description' => __('All the questions'));
		parent::run();
	}
}