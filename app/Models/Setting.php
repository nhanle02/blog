<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = "settings";
    protected $fillable = [
        'site_title',
        'email',
        'address',
        'phone',
        'copyright',
        'category',
        'logo',
        'favicon',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
    ];
}
