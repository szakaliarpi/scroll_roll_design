<?php

namespace App\Actions;

use Inertia\Inertia;

class IndexNiceToMeetYouAction
{
    public function execute()
    {
        return Inertia::render('NiceToMeetYou', [
        ]);
    }
}
