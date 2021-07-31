<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    public function store($id)      // フォローの処理
    {
        \Auth::user()->follow($id);
        return back();
    }
    
    public function destroy($id)    // アンフォロー
    {
        \Auth::user()->unfollow($id);
        return back();
    }
}
