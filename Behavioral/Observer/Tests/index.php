<?php

use DesignPatterns\Behavioral\Observer\Blog;
use DesignPatterns\Behavioral\Observer\BlogObserver;

require_once '../../../bootstrap.php';

$alex = new BlogObserver('Alex');
$adrian = new BlogObserver('Adrian');

$blog = new Blog();

$blog->attach($alex);
$blog->attach($adrian);

$blog->newPost("Refactoring");
$blog->newPost("Clean Code");

var_dump($alex->getLogs());
var_dump($adrian->getLogs());
