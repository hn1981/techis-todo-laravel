<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
    * タスクを保持するユーザーの取得
    */
    public function user()
    {
        // User_idカラムがuser.idと紐付けられる(デフォルトはuser_id。指定したカラムを紐づける場合は第二引数を記載)
        // 紐づけられたレコードを取得
        return $this->belongsTo(User::class);
    }
}
