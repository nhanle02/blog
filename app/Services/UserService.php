<?php

namespace App\Services;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use File;

class UserService 
{
    
    public function getUsersPaginate($params)
    {
        $keyword = $params['s'] ?? '';
        $role = $params['role'] ?? '';

        $users = User::
            when(!empty($role), function($queryRole) use($role) { 
                $queryRole->where('role', $role);
            })->where(function($queryLike) use($keyword) {
                $queryLike->where('username', 'like', "%$keyword%");
                $queryLike->orWhere('email', 'like', "%$keyword%");
            })
            ->paginate(20);
        $users->appends(['s' => $keyword, 'role' => $role]);
        return $users;
    }

    public function store($attributes) {
        $upload = $this->uploadFile();
        $attributes['avatar'] = !empty($upload) ? $upload : null;
        // $attributes['password'] = brcypt($attributes['password']);
        $attributes['password'] = Hash::make($attributes['password']);
        $attributes['status'] = !empty($attributes['status']) ? '1' : '0';
        $attributes['birthday'] = !empty($attributes['birthday']) ? date_create_from_format('m/d/Y', $attributes['birthday'])->format('Y-m-d') : Null;
        // $attributes['avatar'] = !empty($attributes['avatar']) ? '/storage/uploads/users/' . time() . '-' . $attributes['avatar']->getClientOriginalName() : null;
        $user = User::create($attributes);
        return $user;
    }

    public function uploadFile() 
    {
        if (request()->hasFile('avatar')) {
            try {
                $name = request()->file('avatar')->getClientOriginalName();
                $name = time() . '-' . $name;
                $pathFull = 'uploads/users';

                request()->file('avatar')->storeAs(
                    'public/' . $pathFull, $name
                );
                return '/storage/' . $pathFull . '/' . $name; 
            } catch (\Exception $error) { 
                return false;
            }
        }
    }

    public function getUser($id) 
    {
        return User::find($id);
    }

    public function delete($id) 
    {
        return User::where('id', $id)->delete();
    }

    public function update($request, $id) 
    {
        $user = User::find($id);
        $oldAvatar = $user->avatar;
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->username = $request['username'];
        $user->phone = $request['phone'];
        $user->password = !empty($request['password']) ? Hash::make($request['password']) : $user->password;
        $user->email = $request['email'];
        $user->about = $request['about'];
        $user->gender = $request['gender'];
        $user->display_name = $request['display_name'];
        $user->role = $request['role'];
        $user->status = !empty($request['status']) ? '1' : '0';
        $upload = $this->uploadFile();
        $user->avatar = !empty($upload) ? $upload : $user->avatar;
        $user->birthday = Date('Y-m-d', strtotime($request['birthday']));
        $user->save();
        if ($upload) {
            $this->deleteFile($oldAvatar);
        }
        return $user;
    }

    public function deleteFile($oldAvatar) 
    {
        $oldAvatar = str_replace("/storage", "app/public", $oldAvatar);
        File::delete(storage_path($oldAvatar));
    }
}
