<?php

namespace App\Http\Controllers;

use App\Actions\IndexNiceToMeetYouAction;

class NiceToMeetYouController extends Controller
{
    private IndexNiceToMeetYouAction $indexNiceToMeetYouAction;

    public function __construct()
    {
        $this->indexNiceToMeetYouAction = resolve(IndexNiceToMeetYouAction::class);
    }

    public function index()
    {
        return $this->indexNiceToMeetYouAction->execute();
    }
}
