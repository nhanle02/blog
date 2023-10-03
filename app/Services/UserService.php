<?php

namespace App\Services;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService 
{
    
    public function getUsersPaginate()
    {
        return User::paginate(20);
    }

    public function store($attributes) {
        // $attributes['password'] = brcypt($attributes['password']);
        $attributes['password'] = Hash::make($attributes['password']);
        $attributes['status'] = !empty($attributes['status']) ? '1' : '0';
        $attributes['birthday'] = !empty($attributes['birthday']) ? date_create_from_format('m/d/Y', $attributes['birthday'])->format('Y-m-d') : Null;
        $attributes['avatar'] = !empty($attributes['avatar']) ? '/storage/uploads/users/' . time() . '-' . $attributes['avatar']->getClientOriginalName() : null;
        $user = User::create($attributes);
        return $user;
    }

    public function uploadFile($request) 
    {
        if ($request->hasFile('avatar')) {
            try {
                $name = $request->file('avatar')->getClientOriginalName();
                $name = time() . '-' . $name;
                $pathFull = 'uploads/users';

                $request->file('avatar')->storeAs(
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
}
