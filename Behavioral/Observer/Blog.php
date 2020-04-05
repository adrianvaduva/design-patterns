<?php

namespace DesignPatterns\Behavioral\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class Blog implements SplSubject
{
    private $post;

    private $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function newPost(string $post)
    {
        $this->post = $post;
        $this->notify();
    }

    public function notify()
    {
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getPost(): string
    {
        return $this->post;
    }
}