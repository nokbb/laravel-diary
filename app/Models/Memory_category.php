<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memory_category extends Model
{
    use HasFactory;
    //テーブル名
    protected $table = 'memory_categories';
    //timestampsの自動生成をオフ
    public $timestamps = false;

    //可変項目
    protected $fillable =
    [
        'memory_id',
        'category_id'
    ];
}
