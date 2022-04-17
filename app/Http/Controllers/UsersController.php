<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Userモデルを使って、全ユーザーデータを取得
        $users = User::all();
        // viewの呼び出し
        return view('users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // 注目しているユーザのプロフィールデータ取得
        $profile = $user->profile()->get()->first();
        // view の呼び出し
        return view('users.show', compact('user', 'profile'));
    }
}