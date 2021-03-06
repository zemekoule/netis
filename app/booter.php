<?php

require __DIR__ . '/../vendor/autoload.php';

// Configure the application.
$app = new Drago\Configurator;

// Enable Tracy tool.
$app->enableTracy(__DIR__ . '/../log');

// Set the time zone.
$app->setTimeZone('Europe/Prague');

// Directory of temporary files.
$app->setTempDirectory(__DIR__ . '/../storage');

// Autoloading classes.
$app->addAutoload(__DIR__);

// Create DI container from configuration files.
$app->addConfig(__DIR__ . '/app.neon');
$app->addFindConfig([__DIR__ . '/modules', __DIR__ . '/components']);

// Run application.
$app->run();
