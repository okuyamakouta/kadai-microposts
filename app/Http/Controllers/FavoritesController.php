<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class FavoritesController extends Controller
{
    //お気に入り登録するアクション
    public function store(Request $request,$id){
        
        //認証済みユーザが投稿をお気に入り登録する
        \Auth::user()->favorite($id);
        //前のURLへリダイレクト
        return back();
    }
    //お気に入りから外すアクション
    public function destroy($id){
        \Auth::user()->unfavorite($id);
        //前のURLへリダイレクトさせる
        return back();
    }
    
}
