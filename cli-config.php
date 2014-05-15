<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'bootstrap.php';
//require_once 'generated/Text_Poll.php';
//require_once 'generated/Date_Poll.php';
//require_once 'generated/Place_Poll.php';

return ConsoleRunner::createHelperSet($entityManager);

