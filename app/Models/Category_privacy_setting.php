<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_privacy_setting extends Model
{
    use HasFactory;
    //テーブル名
    protected $table = 'category_privacy_settings';

    //可変項目
    protected $fillable =
    [
        'category_id',
        'user_id',
        'privacy_setting',
        'created_at',
        'updated_at'
    ];
}
