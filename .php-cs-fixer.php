<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->exclude('build')
    ->exclude('demos')
    ->exclude('documentation')
    ->exclude('resources')
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PHPUnit84Migration:risky' => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
;