<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'crtpost_id', 'comment', 'user_id', // اضافه کردن user_id
    ];

    // ارتباط با پست
    public function post()
    {
        return $this->belongsTo(Crtpost::class, 'crtpost_id');
    }

    // ارتباط با کاربر
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // ارتباط به کاربر
    }

    
}
