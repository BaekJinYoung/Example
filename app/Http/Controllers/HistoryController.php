<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    public function __construct(History $history){
        $this->History = $history;
    }

    public function index(){
        $histories = $this->History->latest()->paginate(10);;
        return view('admin.historyIndex', compact('histories'));
    }

    public function create(){
        return view('admin.historyCreate');
    }

    public function edit(){
        return view('admin.historyEdit');
    }
}
