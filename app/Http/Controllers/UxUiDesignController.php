<?php

namespace App\Http\Controllers;

use App\Actions\IndexUxUiDesignAction;

class UxUiDesignController extends Controller
{
    private IndexUxUiDesignAction $indexUxUiDesignAction;

    public function __construct()
    {
        $this->indexUxUiDesignAction = resolve(IndexUxUiDesignAction::class);
    }

    public function index()
    {
        return $this->indexUxUiDesignAction->execute();
    }
}
