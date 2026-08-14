<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Services\TweetService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request, TweetService $tweetService)
    {
        // \DB::enableQueryLog();
        $tweets = $tweetService->getTweets();
        // dd(\DB::getQueryLog());

        return view('tweet.index')
            ->with('tweets', $tweets);
    }
}
