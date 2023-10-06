<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;
    
    public function __construct(CategoryService $categoryService) 
    {
        $this->categoryService = $categoryService;
    }
    public function index(Request $request) 
    {
        $categories = $this->categoryService->getCategory($request->all());
        $status = config('const.categories.status');
        return view('admin.categories.index', [
            'categories' => $categories,
            'status' => $status,
        ]);
    }

    public function create()
    {
        $categories = $this->categoryService->getForSelect();
        return view('admin.categories.create', [
            'categories' => $categories,
        ]);
    }

    public function store(CategoryRequest $request)
    {
        $categories = $this->categoryService->store($request->all());
        if ($categories) {
            return redirect()->route('admin.categories.index')->with('success', 'Tạo thành công!');
        }
        return back()->with('error', 'Tạo danh mục thất bại');
    }

    public function edit($id) 
    {
        $category = $this->categoryService->getCategoryById($id);
        $categories = $this->categoryService->getForSelect();
        return view('admin.categories.edit', [
            'category' => $category,
            'categories' => $categories,
        ]);
    }

    public function update(CategoryRequest $request, $id)
    {
        $this->categoryService->update($request->all(), $id);
        return redirect()->route('admin.categories.index')->with('success', 'Cập danh mục nhật thành công');
    }

    public function delete($id)
    {
        $this->categoryService->delete($id);
        return back()->with('success', 'Xoá thành công!!');
    }
}
