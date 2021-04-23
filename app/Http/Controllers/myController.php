<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;

class myController extends Controller
{

    public function show(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'model' => 'string|max:255',
            'sn' => 'string|unique:listing|min:10|max:255',
            'mtm' => 'string|max:255',
        ]);

        $userid = Auth::user()->userid;
        $name = Auth::user()->name;
        $shop = Auth::user()->shop;
        $branch = Auth::user()->branch;
        $type = $request->type;
        $model = $request->model;
        $sn = $request['sn'];
        $mtm = $request->mtm;
        DB::insert('insert into listing (userid, name, shop, branch, type, model, sn, mtm) values (?, ?, ?, ?, ?, ?, ?, ?)', [$userid, $name, $shop, $branch, $type, $model, $sn, $mtm]);
        return redirect()->route('home');
    }

    public function home()
    {
        if (Auth::user()->type)
        {
            return redirect()->route('dashboard');
        }else
        {
            return view('home');
        }
    }

    public function remove($userid, $itemid)
    {
        DB::delete('delete from listing where userid = :userid and id = :id', ['userid' => $userid, 'id' =>$itemid]);
        return redirect()->route('list');
    }

    public function listing()
    {
        if (Auth::user()->type)
        {
            return redirect()->route('dashboard');
        }else
        {
            $listing = DB::select('select * from listing where userid = ?', [Auth::user()->userid]);
            return view('list', ['items' => $listing]);
        }

    }

    public function dashboard()
    {
        if (Auth::user()->type)
        {
            $listing = DB::select('select * from listing');
            return view('dashboard', ['items' => $listing]);
        }else
        {
            return redirect()->route('home');
        }
    }
    
}