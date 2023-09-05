<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    //テーブル名
    protected $table = 'users';

    //可変項目
    protected $fillable =
    [
        'name',
        'username',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'profile_pic',
        'created_at',
        'updated_at'
    ];
}
