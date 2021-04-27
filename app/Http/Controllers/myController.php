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
        if((Auth::user()->userid == $userid) || (Auth::user()->type))
        {
            DB::update('update listing set hidden=1 where id = :id', ['id' =>$itemid]);
        }
        return redirect()->route('dashboard');
    }

    public function recover($userid, $itemid)
    {
        if((Auth::user()->userid == $userid) || (Auth::user()->type))
        {
            DB::update('update listing set hidden=0 where id = :id', ['id' =>$itemid]);
        }
        return redirect()->route('deleted');
    }

    public function listing()
    {
        if (Auth::user()->type)
        {
            return redirect()->route('dashboard');
        }else
        {
            $notebook = DB::select('select id, userid, family, sn, mtm from listing where userid=? and category=? and hidden=0', [Auth::user()->userid, 'notebook']);
            $pc = DB::select('select id, userid, sn, mtm from listing where userid=? and category=? and hidden=0', [Auth::user()->userid, 'pc']);
            $monitor = DB::select('select id, userid, sn, mtm from listing where userid=? and category=? and hidden=0', [Auth::user()->userid, 'monitor']);
            $tablet = DB::select('select id, userid, sn, mtm from listing where userid=? and category=? and hidden=0', [Auth::user()->userid, 'tablet']);
            $accessory = DB::select('select id, userid, type, mtm from listing where userid=? and category=? and hidden=0', [Auth::user()->userid, 'accessory']);
            $service = DB::select('select id, userid, mtm from listing where userid=? and category=? and hidden=0', [Auth::user()->userid, 'service']);    
            return view('list', ['notebook'=>$notebook, 'pc'=>$pc, 'monitor'=>$monitor, 'tablet'=>$tablet, 'accessory'=>$accessory, 'service'=>$service]);
        }

    }

    public function dashboard()
    {
        if (Auth::user()->type)
        {
            $listing = DB::select('select * from listing where hidden=0');
            return view('dashboard', ['items' => $listing]);
        }else
        {
            return redirect()->route('home');
        }
    }

    public function deleted()
    {
        if (Auth::user()->type)
        {
            $listing = DB::select('select * from listing where hidden=1');
            return view('deleted', ['items' => $listing]);
        }else
        {
            return redirect()->route('home');
        }
    }
    
}