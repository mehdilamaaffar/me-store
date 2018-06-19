<?php

namespace App\Http\Controllers;

use App\ClickCounter;
use Illuminate\Http\Request;

class ClickCounterController extends Controller
{
    /**
     * Store a newly created click in click counter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $sessionId = $request->session()->getId();

        $visitorAlreadyExist = ClickCounter::where('visitor', $sessionId)->first();

        if ($visitorAlreadyExist) {
            $visitorAlreadyExist->increment('counts');
        } else {
            ClickCounter::create([
                'visitor' => $sessionId,
                'counts' => 1,
            ]);
        }
    }
}
