<?php

namespace App\Http\Controllers;

use App\Actions\IndexContactAction;
use App\Actions\StoreContactAction;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private IndexContactAction $indexContactAction;
    private StoreContactAction $storeContactAction;

    public function __construct()
    {
        $this->indexContactAction = resolve(IndexContactAction::class);
        $this->storeContactAction = resolve(StoreContactAction::class);
    }

    public function index()
    {
        return $this->indexContactAction->execute();
    }

    public function sendEmail(Request $request)
    {
        return $this->storeContactAction->execute($request);
    }
}
