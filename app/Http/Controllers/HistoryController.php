<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\History;
use Illuminate\Support\Facades\Storage;

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
        $store = $request->validate([
            'main' => 'required|boolean',
            'registered_at' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');

        $date = Carbon::parse($store['registered_at']);

        $this->History->create([
            'main' => $store['main'],
            'date' => $date,
            'details' => $store['content'],
            'image' => $path
        ]);

        if ($request->has('continue')) {
            return redirect()->route('admin.historyIndex');
        }

        return redirect()->route('admin.historyIndex');
    }

    public function edit(History $history)
    {
        return view('admin.historyEdit', compact('history'));
    }

    public function update(Request $request, History $history)
    {
        //dd($request);
        $update = $request->validate([
            'main' => 'required',
            'registered_at' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $update['date'] = Carbon::parse($request['registered_at']);
        $update['details'] = $request['content'];

        if ($request->hasFile('image')) {
            if ($history->image) {
                Storage::disk('public')->delete($history->image);
            }
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $update['image'] = $path;
        }

        $history->update($update);

        return redirect()->route('admin.historyIndex');
    }

    public function delete(History $history){
        $history->delete();
        return redirect()->route('admin.historyIndex');
    }
}
