<?php

namespace App\Services;
use App\Models\Page;
use Illuminate\Support\Str;
use File;

class PageService 
{
    public function store($request) 
    {
        $upload = $this->fileUpload();
        $page = Page::create([
            'title' => $request['title'],
            'slug' => Str::slug($request['slug']),
            'description' => $request['description'],
            'content' => $request['content'],
            'status' => !empty($request['status']) ? '1' : '2',
            'create_by' => $request['create_by'],
            'image' => $upload,
            'created_at' => strftime('%Y-%m-%d %H:%M:%S', time() + 7*3600),
            'updated_at' => strftime('%Y-%m-%d %H:%M:%S', time() + 7*3600),
        ]);
        return $page;
    }

    public function fileUpload()
    {
        if (request()->hasFile('image')) {
            try {
                $name = request()->file('image')->getClientOriginalName();
                $name = time() . '-' . $name;
                $pathFull = 'uploads/pages';

                request()->file('image')->storeAs(
                    'public/' . $pathFull, $name
                );
                return '/storage/' . $pathFull . '/' . $name; 
            } catch (\Exception $error) { 
                return false;
            }
        }
    }

    public function getPages($request)
    {
        $status = $request['status'] ?? '';
        $s = $request['s'] ?? '';
        $pages = Page::with(['user' => function ($queryName) use($s) {
            $queryName->where('first_name', 'like', "%$s%")->orWhere('last_name', 'like', "%$s%");
        }])->when(!empty($status), function ($queryStatus) use($status) {
            $queryStatus->where('status', '=' , $status);
        })->where('title', 'like', "%$s%")
        ->paginate(10);
        $pages->appends(['status' => $status, 's' => $s]);
        return $pages;
    }

    public function getPageById($id) 
    {
        return Page::find($id);
    }

    public function update($id, $request) 
    {
        $page = Page::find($id);
        $oldImage = $page->image;
        $page->title = $request['title'];
        $page->slug = Str::slug($request['slug']);
        $page->status = !empty($request['status']) ? '1' : '2';
        $page->description = $request['description'];
        $page->content = $request['content'];
        $page->create_by = $request['create_by'];
        $page->update_by = $request['create_by'];
        $page->updated_at = strftime('%Y-%m-%d %H:%M:%S', time() + 7*3600);
        $upload = $this->fileUpload();
        $page->image = !empty($upload) ? $upload : $page->image;
        $page->save();
        if($upload) {
            $this->deleteFile($oldImage);
        }
        return $page;
    }
    
    public function deleteFile($oldAvatar) 
    {
        $oldAvatar = str_replace("/storage", "app/public", $oldAvatar);
        File::delete(storage_path($oldAvatar));
    }

    public function delete($id)
    {
        $page = Page::find($id);
        $this->deleteFile($page->image);
        return Page::where('id', $id)->delete();
    }
}