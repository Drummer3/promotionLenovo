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
            'category' => 'required|string|max:255',
            'type' => 'string|max:255',
            'sn' => 'string|unique:listing|min:10|max:255',
            'mtm' => 'string|max:255',
            'family' => 'string|max:255',
        ]);

        $userid = Auth::user()->userid;
        $name = Auth::user()->name;
        $shop = Auth::user()->shop;
        $branch = Auth::user()->branch;
        $category = $request->category;
        $family = $request->family;
        $sn = $request->sn;
        $mtm = $request->mtm;
        $type = $request->type;
        DB::insert('insert into listing (userid, name, shop, branch, category, family, sn, mtm, type) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [$userid, $name, $shop, $branch, $category, $family, $sn, $mtm, $type]);
        return redirect()->route('home')->with('success', 1);
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
            $notebook = DB::select('select id, userid, family, sn, mtm from listing where userid=? and category=?', [Auth::user()->userid, 'notebook']);
            $pc = DB::select('select id, userid, sn, mtm from listing where userid=? and category=?', [Auth::user()->userid, 'pc']);
            $monitor = DB::select('select id, userid, sn, mtm from listing where userid=? and category=?', [Auth::user()->userid, 'monitor']);
            $tablet = DB::select('select id, userid, sn, mtm from listing where userid=? and category=?', [Auth::user()->userid, 'tablet']);
            $accessory = DB::select('select id, userid, type, mtm from listing where userid=? and category=?', [Auth::user()->userid, 'accessory']);
            $service = DB::select('select id, userid, mtm from listing where userid=? and category=?', [Auth::user()->userid, 'service']);    
            return view('list', ['notebook'=>$notebook, 'pc'=>$pc, 'monitor'=>$monitor, 'tablet'=>$tablet, 'accessory'=>$accessory, 'service'=>$accessory]);
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