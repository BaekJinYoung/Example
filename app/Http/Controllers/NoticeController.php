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

    public function edit(){
        return view('admin.noticeEdit');
    }
}
