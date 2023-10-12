<?php

namespace App\Services;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagService
{
    public function getTags($request) 
    {
        $name = $request['name'] ?? '';
        $tags = Tag::when(!empty($name), function($query) use($name) {
            $query->where('name', 'like', "%$name%");
        })->paginate(10);
        $tags->appends(['name' => $name]);
        return $tags;
    }

    public function store($attributes) 
    {
        $attributes['slug'] = Str::slug($attributes['slug']);
        $attributes['status'] = !empty($attributes['status']) ? '2' : '1';
        $tags = Tag::create($attributes);
        return $tags;
    }

    public function edit($id) 
    {
        return Tag::find($id);
    }

    public function update($request, $id) 
    {
        $tag = Tag::find($id);
        $tag->name = $request['name'];
        $tag->status = !empty($request['status']) ? '2' : '1';
        $tag->description = $request['description'];
        $tag->slug = Str::slug($request['slug']);
        $tag->save();
        return $tag;
    }

    public function delete($id) 
    {
        return Tag::where('id', $id)->delete();
    }
}



