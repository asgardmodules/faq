<?php
require_once __DIR__.'/../utils/FileManager.php';
require_once __DIR__.'/../orm/Libs/MigrationsManager.php';

\Asgard\Utils\FileManager::copy(__DIR__.'/app/faq', 'app/faq');
\Asgard\Utils\FileManager::copy(__DIR__.'/tests/QuestionAdmintest.php', 'tests/QuestionAdmintest.php');
\Asgard\Utils\FileManager::copy(__DIR__.'/web/faq', 'web/faq');

\Asgard\Orm\Libs\MigrationsManager::addMigrationFile('migrations/Faq.php');
\Asgard\Orm\Libs\MigrationsManager::migrate('Faq');
