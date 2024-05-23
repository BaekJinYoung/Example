<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function __construct(Notice $notice)
    {
        $this->Notice = $notice;
    }

    public function index(Request $request)
    {
        $query = $this->Notice->query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title', 'like', '%' . $search . '%');
        }

        $perPage = $request->query('perPage', 10);
        $notices = $query->latest()->paginate($perPage);

        return view('admin.noticeIndex', compact('notices', 'perPage'));
    }

    public function create()
    {
        return view('admin.noticeCreate');
    }

    public function store(Request $request)
    {
        $store = $request->validate([
            'title' => 'required',
            'details' => 'required',
            'summary' => 'required',
            'writer' => 'required',
            'information' => 'required',
            'registered_at' => 'required',
            'url' => 'nullable',
        ]);

        $this->Notice->create([
            'title' => $store['title'],
            'details' => $store['details'],
            'summary' => $store['summary'],
            'writer' => $store['writer'],
            'information' => $store['information'],
            'date' => $store['registered_at'],
            'url' => $store['url'],
        ]);

        if ($request->has('continue')) {
            return redirect()->route('admin.noticeIndex');
        }

        return redirect()->route('admin.noticeIndex');
    }

    public function edit(Notice $notice)
    {
        return view('admin.noticeEdit', compact('notice'));
    }

    public function update(Request $request, Notice $notice)
    {
        $update = $request->validate([
            'title' => 'required',
            'details' => 'required',
            'summary' => 'required',
            'writer' => 'required',
            'information' => 'required',
            'registered_at' => 'required',
            'url' => 'nullable',
        ]);

        $notice->update([
            'title' => $update['title'],
            'details' => $update['details'],
            'summary' => $update['summary'],
            'writer' => $update['writer'],
            'information' => $update['information'],
            'date' => $update['registered_at'],
            'url' => $update['url'],
        ]);

        return redirect()->route('admin.noticeIndex');
    }

    public function delete(Notice $notice)
    {
        $notice->delete();
        return redirect()->route('admin.noticeIndex');
    }
}
