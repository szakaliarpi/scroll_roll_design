<?php

namespace App\Http\Controllers;

use App\Actions\IndexHomeAction;


class HomeController extends Controller
{
    private IndexHomeAction $indexHomeAction;

    public function __construct()
    {
        $this->indexHomeAction = resolve(IndexHomeAction::class);
    }

    public function index()
    {
        return $this->indexHomeAction->execute();
    }
}
