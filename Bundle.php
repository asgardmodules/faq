<?php
namespace Asgard\Faq;

class Bundle extends \Asgard\Core\BundleLoader {
	public function run() {
		\Asgard\Admin\Libs\AdminMenu::instance()->menu[0]['childs'][] = array('label' => 'FAQ', 'link' => 'faq');
		\Asgard\Admin\Libs\AdminMenu::instance()->home[] = array('img'=>\Asgard\Core\Facades\Asgard\Core\App::get('url')->to('faq/icon.svg'), 'link'=>'faq', 'title' => __('FAQ'), 'description' => __('All the questions'));
		parent::run();
	}
}