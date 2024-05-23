<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    public function __construct(History $history)
    {
        $this->History = $history;
    }

    public function index()
    {
        $histories = $this->History->latest()->paginate(10);
        return view('admin.historyIndex', compact('histories'));
    }

    public function create()
    {
        return view('admin.historyCreate');
    }

    public function store(Request $request)
    {
        //dd($request);
        $store = $request->validate([
            'main' => 'required|boolean',
            'registered_at' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $date = Carbon::parse($store['registered_at']);


        $this->History->create([
            'main' => $store['main'],
            'date' => $date,
            'details' => $store['content'],
        ]);

        if ($request->has('continue')) {
            return redirect()->route('admin.historyIndex');
        }

        return redirect()->route('admin.historyIndex');
    }

    public function edit()
    {
        return view('admin.historyEdit');
    }

    public function update(Request $request, History $history)
    {
        $request->validate([
            'main' => 'required',
            'date' => 'required',
            'details' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $history->update($request->all());

        return redirect()->route('admin.historyIndex');
    }
}
