<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function allHistory(Request $request)
    {
        $histories = History::with('user')->orderBy('created_at', 'desc')->get();
        return view('pages.admin.admin-history', compact('histories'));
    }
}
