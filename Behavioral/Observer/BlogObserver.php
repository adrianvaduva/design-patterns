<?php

namespace DesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

class BlogObserver implements SplObserver
{
    private $name;
    private $newPosts = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(SplSubject $subject)
    {
        $this->newPosts[] = clone $subject;
    }

    public function getNewPosts(): array
    {
        return $this->newPosts;
    }

    public function getLogs(): array
    {
        $logs = array_map(function ($item) {
            return sprintf("%s has received a notification for post: %s", $this->name, $item->getPost());
        }, $this->getNewPosts());

        return $logs;
    }
}