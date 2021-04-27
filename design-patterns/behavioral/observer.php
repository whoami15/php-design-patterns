<?php

// It is used to notify the rest of the system about certain events in certain place.

// This patterns comply the open/close principle

class Theater
{
    public function present(Movie $movie): void
    {
        // Instead of add extra process here, some events are created
        $this->getEventManager()
            ->notify(new Event(Event::START, $movie));
        $movie->play();

        $movie->pause(5);
        $this->getEventManager()
            ->notify(new Event(Event::PAUSE, $movie));
        $movie->finish();

        $this->getEventManager()
            ->notify(new Event(Event::END, $movie));
    }
}

$theater = new Theater();

$theater
    ->getEventManager()
    ->listen(Event::START, new MessagesListener())
    ->listen(Event::START, new LightsListener())
    ->listen(Event::PAUSE, new BreakListener())
    ->listen(Event::PAUSE, new AdvertisementListener())
    ->listen(Event::END, new FeedbackListener())
    ->listen(Event::END, new CleaningListener());
$theater->present($movie);
