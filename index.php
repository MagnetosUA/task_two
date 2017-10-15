<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\Finder\Finder;

$finder = new Finder();

$finder->files()->in(__DIR__);

foreach ($finder as $file) {
    // Dump the absolute path
    var_dump($file->getRealPath());
}