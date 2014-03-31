<?php

// sf2_training/bye.php

require_once __DIR__ . '/init.php';

$response->setContent('Goodbye!');
$response->send();