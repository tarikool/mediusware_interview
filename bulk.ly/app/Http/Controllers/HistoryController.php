<?php

namespace Bulkly\Http\Controllers;

use Bulkly\BufferPosting;
use Bulkly\SocialPostGroups;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $buffer_posting = BufferPosting::paginate(10);
        return view('pages.histories', compact('buffer_posting'));
    }
}
