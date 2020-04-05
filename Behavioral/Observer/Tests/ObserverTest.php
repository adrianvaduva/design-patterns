<?php

namespace DesignPatterns\Behavioral\Observer\Tests;

use DesignPatterns\Behavioral\Observer\Blog;
use DesignPatterns\Behavioral\Observer\BlogObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testReceivedNotification()
    {
        $observer = new BlogObserver('Alex');

        $blog = new Blog();
        $blog->attach($observer);
        $blog->newPost("Refactoring");
        $blog->newPost("Clean code");

        $this->assertCount(2, $observer->getNewPosts());
    }
}