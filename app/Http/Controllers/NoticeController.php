<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function __construct(Notice $notice){
        $this->Notice = $notice;
    }

    public function index(){
        $notices = $this->Notice->latest()->paginate(10);;
        return view('admin.noticeIndex', compact('notices'));
    }

    public function create(){
        return view('admin.noticeCreate');
    }

    public function store(Request $request){
//        if ($request){
//            dd($request);
//        }
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

        if($request->has('continue')){
            return redirect()->route('admin.noticeIndex');
        }

        return redirect()->route('admin.noticeIndex');
    }

    public function edit(Notice $notice){
        return view('admin.noticeEdit', compact('notice'));
    }

    public function update(Request $request, Notice $notice){
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
}
