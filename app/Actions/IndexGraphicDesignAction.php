<?php

namespace App\Actions;

use Inertia\Inertia;

class IndexGraphicDesignAction
{
    public function execute()
    {
        return Inertia::render('GraphicDesign', [
        ]);
    }
}
