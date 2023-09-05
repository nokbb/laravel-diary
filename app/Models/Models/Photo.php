<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    //テーブル名
    protected $table = 'photos';

    //可変項目
    protected $fillable =
    [
        'post_id',
        'file_path',
        'caption',
        'entry',
        'created_at',
        'updated_at'
    ];
}
