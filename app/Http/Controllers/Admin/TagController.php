<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Services\TagService;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $tagService;

    public function __construct(TagService $tagService) 
    {
        $this->tagService = $tagService;
    }


    public function index(Request $request) {
        $tags = $this->tagService->getTags($request->all());
        $status = config('const.tags.status');
        return view('admin.tags.index', [
            'tags' => $tags,
            'status' => $status,
        ]);
    }

    public function create() {
        return view('admin.tags.create');
    }

    public function store(TagRequest $request) 
    {
        $tags = $this->tagService->store($request->all());
        if ($tags) {
            return redirect()->route('admin.tags.index')->with('success', 'Tạo thẻ mới thành công!!!');
        } 
        return back()->with('error', 'Tạo thất bại!!!');
    }

    public function edit($id)
    {
        $tag = $this->tagService->edit($id);
        return view('admin.tags.edit', [
            'tag' => $tag,
        ]);
    }

    public function update(TagRequest $request, $id) 
    {
        $tags = $this->tagService->update($request->all(), $id);
        if ($tags) {
            return redirect()->route('admin.tags.index')->with('success', 'Cập nhật thành công!!!');
        }
        return back()->with('error', 'Cập nhật thất bại!!!'); 
    }

    public function delete($id) 
    {
        $this->tagService->delete($id);
        return back()->with('success', 'Xoá thành công!!!');
    }
}
