<?php

namespace App\Services;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Support\Str;
use File;

class PostService
{
    public function getPosts($request) 
    {
        $s = $request['s'] ?? '';
        $status = $request['status'] ?? '';
        $uid = $request['uid'] ?? '';
        $posts = Post::when(!empty($status), function($queryStatus) use($status) {
            $queryStatus->where('status', $status);
        })
        ->when(!empty($uid), function($queryUser) use($uid) {
            $queryUser->whereHas('user', function($queryExistsUser) use($uid){
                $queryExistsUser->where('id', $uid);
            });
        })
        ->where('title', 'like', "%$s%")
        ->with(['categories', 'user'])->paginate(20);

        $posts->appends(['s' => $s, 'status' => $status, 'uid' => $uid]);
        return $posts;
    }

    public function getCategories()
    {
        $categories = Category::with('childrenCategories')
        ->where('parent', '0')->get();
        return $categories;
    }

    public function getTags()
    {
        return Tag::get();
    }

    public function store($request) 
    {
        $upload = $this->uploadFile();
        $data = [
            'title' => $request['title'],
            'description' => $request['description'],
            'slug' => Str::slug($request['slug']),
            'content' => $request['content'],
            'status' => !empty($request['status']) ? '1' : '2',
            'create_by' => $request['create_by'] ?? 1,
            'is_featured' => !empty($request['is_featured']) ? '0' : '1',
            'comment_status' => !empty($request['comment_status']) ? '1' : '2',
            'image' => !empty($upload) ? $upload : null,
        ];
        $posts = Post::create($data);
        if ($posts) {
            $categories = $request['categories'] ?? [];
            $tags = $request['tags'] ?? [];
            $postCategories = [];
            $postTags = [];
            foreach ($categories as $category) {
                $postCategories[] = [
                    'post_id' => $posts->id,
                    'category_id' => $category,
                    'created_at' => strftime('%Y-%m-%d %H:%M:%S', time() + 7*3600),
                    'updated_at' => strftime('%Y-%m-%d %H:%M:%S', time() + 7*3600),
                ];
                Category::where('id', $category)->increment('count');
            }
            foreach ($tags as $tag) {
                $postTags[] = [
                    'post_id' => $posts->id,
                    'tag_id' => $tag,
                    'created_at' => strftime('%Y-%m-%d %H:%M:%S', time() + 7*3600),
                    'updated_at' => strftime('%Y-%m-%d %H:%M:%S', time() + 7*3600),
                ];
            }
            PostCategory::insert($postCategories);
            PostTag::insert($postTags);
        }
        return $posts;
    }

    public function uploadFile()
    {
        if (request()->hasFile('image')) {
            try {
                $name = request()->file('image')->getClientOriginalName();
                $name = time() . '-' . $name;
                $pathFull = 'uploads/posts';

                request()->file('image')->storeAs(
                    'public/' . $pathFull, $name
                );
                return '/storage/' . $pathFull . '/' . $name; 
            } catch (\Exception $error) { 
                return false;
            }
        }
    }

    public function getPost($id)
    {
        $post = Post::find($id);
        return $post;
    }

    public function update($request, $id) 
    {
        $post = Post::find($id);
        $oldImage = $post->image;
        $post->title = $request['title'];
        $post->slug = Str::slug($request['slug']);
        $post->description = $request['description'];
        $post->content = $request['content'];
        $post->status = !empty($request['status']) ? '1' : '2';
        $post->create_by = $request['create_by'];
        $post->update_by = $request['create_by'];
        $post->comment_status = !empty($request['comment_status']) ? '1' : '2';
        $post->is_featured = !empty($request['is_featured']) ? '0' : '1';
        $post->updated_at = strftime('%Y-%m-%d %H:%M:%S', time() + 7*3600);
        $upload = $this->uploadFile();
        $post->image = !empty($upload) ? $upload : $post->image;
        $post->categories()->sync($request['categories']);
        $post->tags()->sync($request['tags']);
        $post->save();
        if ($upload) {
            $this->deleteFile($oldImage);
        }
        return $post;
    }

    public function deleteFile($oldImage) 
    {
        $oldAvatar = str_replace("/storage", "app/public", $oldImage);
        File::delete(storage_path($oldAvatar));
    }

    public function delete($id) 
    {
        $post = Post::find($id);
        if (!$post) {
            return false;
        }
        foreach($post->categories as $category) {
            Category::where('id', $category->id)->decrement('count');
        }
        $post->tags()->detach();
        $post->categories()->detach();
        $postDelete = $post->delete();
        if ($postDelete) {
            $this->deleteFile($post->image);
            return true;
        } else {
            return false;
        }
    }
} 