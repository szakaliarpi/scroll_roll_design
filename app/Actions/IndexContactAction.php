<?php

namespace App\Actions;

use Inertia\Inertia;

class IndexContactAction
{
    public function execute()
    {
        return Inertia::render('GetInTouch', [
        ]);
    }
}
