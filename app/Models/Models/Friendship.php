<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    use HasFactory;
    //テーブル名
    protected $table = 'friendships';

    //可変項目
    protected $fillable =
    [
        'user_id',
        'friend_id',
        'status',
        'created_at',
        'updated_at'
    ];
}
