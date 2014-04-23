<?php
require_once __DIR__.'/../utils/FileManager.php';

\Asgard\Utils\FileManager::copy(__DIR__.'/app/faq', 'app/faq');
\Asgard\Utils\FileManager::copy(__DIR__.'/tests/QuestionAdmintest.php', 'tests/QuestionAdmintest.php');
\Asgard\Utils\FileManager::copy(__DIR__.'/web/faq', 'web/faq');