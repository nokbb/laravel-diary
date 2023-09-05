<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //テーブル名
    protected $table = 'categories';

    //可変項目
    protected $fillable =
    [
        'name',
        'icon'
    ];
}
