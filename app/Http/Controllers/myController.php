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
        DB:: table('listing')->insert([
            'userid' => $userid,
            'name' => $name,
            'shop' => $shop,
            'branch' => $branch,
            'category' => $category,
            'family' => $family,
            'sn' => $sn,
            'mtm' => $mtm,
            'type' => $type
        ]);
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
            DB::table('listing')
                    ->where('id', $itemid)
                    ->update(['hidden'=>1]);
        }
        return redirect()->route('list');
    }

    public function recover($userid, $itemid)
    {
        if((Auth::user()->userid == $userid) || (Auth::user()->type))
        {
            DB::table('listing')
                    ->where('id', $itemid)
                    ->update(['hidden'=>0]);
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
            $notebook = DB::table('listing')
                            ->select('id', 'userid', 'family', 'sn', 'mtm')
                            ->where('userid', Auth::user()->userid)
                            ->where('category', 'notebook')
                            ->where('hidden', 0)
                            ->get();
            
            $pc = DB::table('listing')
                            ->select('id', 'userid', 'sn', 'mtm')
                            ->where('userid', Auth::user()->userid)
                            ->where('category', 'pc')
                            ->where('hidden', 0)
                            ->get();

            $monitor = DB::table('listing')
                            ->select('id', 'userid', 'sn', 'mtm')
                            ->where('userid', Auth::user()->userid)
                            ->where('category', 'monitor')
                            ->where('hidden', 0)
                            ->get();
            
            $tablet = DB::table('listing')
                            ->select('id', 'userid', 'sn', 'mtm')
                            ->where('userid', Auth::user()->userid)
                            ->where('category', 'tablet')
                            ->where('hidden', 0)
                            ->get();

            $accessory = DB::table('listing')
                            ->select('id', 'userid', 'type', 'mtm')
                            ->where('userid', Auth::user()->userid)
                            ->where('category', 'accessory')
                            ->where('hidden', 0)
                            ->get();

            $service = DB::table('listing')
                            ->select('id', 'userid', 'mtm')
                            ->where('userid', Auth::user()->userid)
                            ->where('category', 'service')
                            ->where('hidden', 0)
                            ->get();

            return view('list', ['notebook'=>$notebook, 'pc'=>$pc, 'monitor'=>$monitor, 'tablet'=>$tablet, 'accessory'=>$accessory, 'service'=>$service]);
        }

    }

    public function dashboard()
    {
        if (Auth::user()->type)
        {
            $listing = DB::table('listing')->where('hidden', 0)->get();
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
            $listing = DB::table('listing')->where('hidden', 1)->get();
            return view('deleted', ['items' => $listing]);
        }else
        {
            return redirect()->route('home');
        }
    }
    
}