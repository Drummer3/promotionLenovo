<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ForgotUserController extends Controller
{
    public function load()
    {
        return view('auth.forgot');
    }

    public function confirm(Request $request)
    {
        $userid = $request->userid;
        $number = $request->number;
        if (DB::table('users')->where('userid', $request->userid)->where('number', $request->number)->exists()) {
            return view('auth.new-password')->with('userid', $userid)->with('number', $number);
        } else {
            return redirect()->route('forgotGET')->with('errors', ['No user found']);
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'password' => 'required|string|confirmed|min:8',
        ]);
        $password = Hash::make($request->password);
        $userid = $request->userid;
        $number = $request->number;
        DB::table('users')
            ->where('userid', $userid)
            ->where('number', $number)
            ->update(['password' => $password]);
        return redirect()->route('login');
    }
}
