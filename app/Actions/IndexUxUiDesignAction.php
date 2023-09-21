<?php

namespace App\Actions;

use Inertia\Inertia;

class IndexUxUiDesignAction
{
    public function execute()
    {
        return Inertia::render('UxUiDesign', [
        ]);
    }
}
