<?php

namespace App\Http\Controllers;

use App\Actions\IndexGraphicDesignAction;

class GraphicDesignController extends Controller
{
    private IndexGraphicDesignAction $indexGraphicDesignAction;

    public function __construct()
    {
        $this->indexGraphicDesignAction = resolve(IndexGraphicDesignAction::class);
    }

    public function index()
    {
        return $this->indexGraphicDesignAction->execute();
    }
}
