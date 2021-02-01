<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    public function store() {
         // 認証済みユーザ（閲覧者）が、 idのユーザをフォローする
         \Auth::user()->follow($id);
         // 前のURLへリダイレクトさせる
        return back();
    }
    public function destroy() {
        //認証済みユーザが、idのユーザをアンフォローする
        \Auth::user()->unfollow($id);
        //前のURLへリダイレクト
        return back();
    }
}