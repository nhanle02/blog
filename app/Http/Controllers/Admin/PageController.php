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
    public function index(Request $request) 
    {
        $pages = $this->pageService->getPages($request->all());
        $status = config('const.pages.status');
        return view('admin.pages.index', [
            'pages' => $pages,
            'status' => $status
        ]);
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

    public function edit($id) 
    {
        $page = $this->pageService->getPageById($id);
        return view('admin.pages.edit', [
            'page' => $page,
        ]);
    }

    public function update($id, PageRequest $request)
    {
        $page = $this->pageService->update($id, $request->all());
        if ($page) {
            return redirect()->route('admin.pages.index')->with('success', 'Cập nhật thành công!!!');
        }
        return back()->with('error', 'Cập nhật thất bại!!!');
    }
    public function delete($id) 
    {
        $page = $this->pageService->delete($id);
        if ($page) {
            return redirect()->route('admin.pages.index')->with('success', 'Xoá thành công!!!');
        }
        return back()->with('error', 'Xoá thất bại!!!');
    }
}
