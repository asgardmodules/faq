<?php
require_once 'paths.php';
require _CORE_DIR_.'core.php';
\Asgard\Core\App::loadDefaultApp();

\Asgard\Utils\FileManager::copy(__DIR__.'/app/faq', _DIR_.'app/faq');
\Asgard\Utils\FileManager::copy(__DIR__.'/tests/QuestionAdmintest.php', _DIR_.'tests/QuestionAdmintest.php');
\Asgard\Utils\FileManager::copy(__DIR__.'/web/faq', _DIR_.'web/faq');

\Asgard\Orm\Libs\MigrationsManager::addMigrationFile(__DIR__.'/migrations/Faq.php');
\Asgard\Orm\Libs\MigrationsManager::migrate('Faq');
