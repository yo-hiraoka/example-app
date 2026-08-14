<?php

namespace App\View\Components\Tweet;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Options extends Component
{
    public function __construct(
        private int $tweetId,
        private int $userId
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.tweet.options')
            ->with('tweetId', $this->tweetId)
            ->with('myTweet', Auth::id() === $this->userId);
    }
}
