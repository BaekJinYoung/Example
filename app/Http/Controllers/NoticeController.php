<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticeRequest;
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
        $search = $request->input('search', '');

        if (!empty($search)) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        $perPage = $request->query('perPage', 10);
        $notices = $query->where('language', app()->getLocale())->latest()->paginate($perPage);

        return view('admin.noticeIndex', compact('notices', 'perPage', 'search'));
    }

    public function create()
    {
        return view('admin.noticeCreate');
    }

    public function store(NoticeRequest $request)
    {
        $store = $request->validated();

        $store['language'] = app()->getLocale();
        $store['date'] = $store['registered_at'];

        $this->Notice->create($store);

        if ($request->filled('continue')) {
            return redirect()->route('admin.noticeIndex');
        }

        return redirect()->route('admin.noticeIndex');
    }

    public function edit(Notice $notice)
    {
        return view('admin.noticeEdit', compact('notice'));
    }

    public function update(NoticeRequest $request, Notice $notice)
    {
        $update = $request->validated();

        $update['registered_at'] = $request['date'];

        $notice->update($update);

        return redirect()->route('admin.noticeIndex');
    }

    public function delete(Notice $notice)
    {
        $notice->delete();
        return redirect()->route('admin.noticeIndex');
    }
}
