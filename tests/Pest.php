<?php

use Pest\Exceptions\InvalidPestCommand;
use Pest\TestSuite;
use Tests\TestCase;

// Pest は RunInSeparateProcess に対応していないため InvalidPestCommand をキャッチした場合は早期リターンする
try {
    TestSuite::getInstance();
} catch (InvalidPestCommand) {
    return;
}

pest()->extend(TestCase::class)
    ->in('Browser');
