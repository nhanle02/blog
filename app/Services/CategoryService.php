<?php

namespace App\Services;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryService 
{
    public function getForSelect() 
    {
        return Category::get();
    }

    public function getCategory($request) 
    {
        $name = $request['name'] ?? '';
        $category = Category::with([
            'childrenCategories' => function($query) use($name){
                $query->where('name', 'like', "%$name%");
            }
        ])
        ->where('parent', '0')
        ->paginate(10);
        $category->appends(['name' => $name]);
        return $category;
    }

    public function store($attributes) 
    {
        $attributes['status'] = !empty($attributes['status']) ? '1' : '0';
        $category = Category::create([
            'name' => (string)$attributes['name'],
            'description' => $attributes['description'],
            'parent' => $attributes['parent'],
            'slug' => Str::slug($attributes['slug']),
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
        $category->count = $category->posts->count();
        $category->name = $request['name'];
        $category->slug = Str::slug($request['slug']);
        $category->description = $request['description'];
        $category->parent = $request['parent'];
        $category->status = !empty($request['status']) ? '1' : '0';
        $category->save();
        return $category;
    }

    public function delete($id)
    {
        $category = Category::with('childrenCategories')->find($id);
        $childrenCategories = $category->childrenCategories;
        foreach ($childrenCategories as $childCategory) {
            $childCategory->parent = '0';
            $childCategory->save();
        }
        return Category::where('id', $id)->delete();
    }
}