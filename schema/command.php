<?php
$command = new \Symfony\Component\Console\Command\Command('migrate');

$command->setCode(function() use ($app) {
    require_once __DIR__ . '/schema.php';
});

return $command;