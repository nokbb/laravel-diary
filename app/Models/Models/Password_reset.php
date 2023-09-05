<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Password_reset extends Model
{
    use HasFactory;
    //テーブル名
    protected $table = 'password_resets';

    //可変項目
    protected $fillable =
    [
        'email',
        'token',
        'created_at'
    ];
}
