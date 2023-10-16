<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table = 'pages';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'status',
        'create_by',
        'update_by',
        'image',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'create_by');
    }
}
