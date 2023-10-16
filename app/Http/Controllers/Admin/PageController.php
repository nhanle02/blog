<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Services\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }
    public function index() 
    {
        return view('admin.pages.index');
    }
    public function create() 
    {
        return view('admin.pages.create');
    }
    public function store(PageRequest $request) 
    {
        $page = $this->pageService->store($request->all());
        if ($page) {
            return redirect()->route('admin.pages.index')->with('success', 'Tạo thành công!!!');
        }
        return back()->with('error', 'Tạo thất bại!!!');
    }
}
