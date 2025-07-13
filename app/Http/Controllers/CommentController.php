<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment; // مدل کامنت
use App\Models\Crtpost; // مدل پست
use Illuminate\Support\Facades\Auth; // برای استفاده از احراز هویت

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        // اعتبارسنجی کامنت
        $request->validate([
            'comment' => 'required|string', // اطمینان از اینکه فیلد کامنت پر شده باشد و نوع آن درست باشد
        ]);

        // ذخیره کامنت در جدول comments
        Comment::create([
            'comment' => $request->comment,  // کامنت ارسال شده
            'crtpost_id' => $postId,  // شناسه پست مرتبط
            'user_id' => auth()->id(),  // شناسه کاربر وارد شده
        ]);

        // ریدایرکت به صفحه پست بعد از ذخیره کامنت
        return back();
    }
}
