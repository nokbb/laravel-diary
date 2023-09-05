<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memory_category extends Model
{
    use HasFactory;
    //テーブル名
    protected $table = 'memory_categories';

    //可変項目
    protected $fillable =
    [
        'memory_id',
        'category_id'
    ];
}
