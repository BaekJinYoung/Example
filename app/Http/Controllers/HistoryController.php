<?php

namespace App\Http\Controllers;

use App\Http\Requests\HistoryRequest;
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

    public function index(Request $request)
    {
        $perPage = $request->query('perPage', 8);
        $selectedYear = $request->query('yearFilter', '');
        $histories = $this->History->where('language', app()->getLocale())->latest();

        if ($selectedYear) {
            $histories->whereYear('date', $selectedYear);
        }
        $histories = $histories->paginate($perPage);

        $years = $this->History->selectRaw('YEAR(date) as year')->distinct()->pluck('year')->toArray();

        return view('admin.historyIndex', compact('histories', 'perPage', 'years', 'selectedYear'));
    }

    public function store(HistoryRequest $request)
    {
        $store = $request->validated();

        $store['details'] = $request['content'];

        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', time() . '_' . $fileName, 'public');
            $store['image'] = $path;
            $store['image_name'] = $fileName;
        }

        $date = Carbon::parse($request['registered_at']);
        $store['date'] = $date->format('Y-m-d');
        $store['language'] = app()->getLocale();

        $this->History->create($store);

        if ($request->filled('continue')) {
            return redirect()->route('admin.historyIndex');
        }

        return redirect()->route('admin.historyIndex');
    }

    public function create()
    {
        return view('admin.historyCreate');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('admin.popupUpload'), $fileName);
        }

        return back();
    }

    public function edit($id)
    {
        $history = History::withTrashed()->find($id);

        if (!$history || $history->trashed()) {
            return redirect()->route('admin.historyIndex');
        }

        return view('admin.historyEdit', compact('history'));
    }

    public function update(HistoryRequest $request, History $history)
    {
        $update = $request->validated();

        $update['date'] = Carbon::parse($request['registered_at']);
        $update['details'] = $request['content'];

        if ($request->remove_image == 1) {
            if ($history->image) {
                Storage::delete('public/images/' . $history->image);
            }
            $update['image'] = '';
            $update['image_name'] = '';
        } elseif ($request->hasFile('image')) {
            if ($history->image) {
                Storage::delete('public/images/' . $history->image);
            }
            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', time() . '_' . $fileName, 'public');
            $update['image'] = $path;
            $update['image_name'] = $fileName;
        }

        $history->update($update);

        return redirect()->route('admin.historyIndex');
    }

    public function delete(History $history)
    {
        $history->delete();
        return redirect()->route('admin.historyIndex');
    }
}
