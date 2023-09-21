<?php

namespace App\Actions;

use Inertia\Inertia;

class IndexHomeAction
{
    public function execute()
    {
        return Inertia::render('Home', [
        ]);
    }
}
