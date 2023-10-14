<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'status' => 'nullable|in:on',
            'comment_status' => 'nullable|in:on',
            'is_featured' => 'nullable|in:on',
            'create_by' => 'required',
            'image' => 'nullable|max:255',
            'categories' => 'required',
        ];
    }
}
