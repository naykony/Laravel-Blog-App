<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        // اعتبارسنجی ورودی
        $request->validate([
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5', // اعتبارسنجی نمره
        ]);

        // ذخیره کامنت و نمره
        Comment::create([
            'comment' => $request->comment,
            'crtpost_id' => $postId,
            'user_id' => auth()->id(),
            'rating' => $request->rating, // ذخیره نمره
        ]);

        // بازگشت به صفحه پست
        return back();
    }
}
