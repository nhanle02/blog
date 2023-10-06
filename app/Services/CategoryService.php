<?php

namespace App\Services;
use App\Models\Category;

class CategoryService 
{
    public function getForSelect() 
    {
        return Category::get();
    }

    public function getCategory($request) 
    {
        $name = $request['name'] ?? '';
        $category = Category::where('name', 'like', "%$name%")->paginate(10);
        $category->appends(['name' => $name]);
        return $category;
    }

    public function store($attributes) 
    {
        $attributes['status'] = !empty($attributes['status']) ? '1' : '0';
        $attributes['count'] = $attributes['count'] == null ? '0' : $attributes['count'];
        $attributes['parent'] = $attributes['parent'] ==  '0' ? null : $attributes['parent'];
        // dd($attributes);
        $category = Category::create([
            'name' => (string)$attributes['name'],
            'description' => $attributes['description'],
            'parent' => $attributes['parent'],
            'slug' => $attributes['slug'],
            'count' => $attributes['count'],
            'status' => $attributes['status'],
        ]);
        return $category;
    }

    public function getCategoryById($id) 
    {
        return Category::find($id);
    }

    public function update($request, $id) 
    {
        $category = Category::find($id);
        $category->name = $request['name'];
        $category->slug = $request['slug'];
        $category->description = $request['description'];
        $category->count = $request['count'];
        $category->parent = $request['parent'];
        $category->status = !empty($request['status']) ? '1' : '0';
        $category->save();
        return $category;
    }

    public function delete($id)
    {
        return Category::where('id', $id)->delete();
    }
}