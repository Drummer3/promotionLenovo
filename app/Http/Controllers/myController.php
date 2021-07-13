<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class myController extends Controller
{

    public function show(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'type' => 'string|max:255',
            'sn' => 'string|unique:listing|max:255',
            'mtm' => 'string|min:10',
            'family' => 'string|max:255',
            'price' => 'required|numeric',
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
        $price = $request->price;

        DB:: table('listing')->insert([
            'userid' => $userid,
            'name' => $name,
            'shop' => $shop,
            'branch' => $branch,
            'category' => $category,
            'family' => $family,
            'sn' => $sn,
            'mtm' => $mtm,
            'type' => $type,
            'price' => $price,
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

    public function modal($type, $userid, $id)
    {
        return View::make('components.modal.'.$type, ['userid' =>$userid,'id' => $id])
                        ->render();

    }

    public function listing()
    {
        if (Auth::user()->type)
        {
            return redirect()->route('dashboard');
        }else
        {
            $tikets = 0;
            $tk = DB::table('listing')
                        ->select('price')
                        ->where('userid', Auth::user()->userid)
                        ->where('hidden', 0)
                        ->get();
            foreach($tk as $each)
            {
                if($each->price > 0 and $each->price < 1500){$tikets += 1;}
                elseif($each->price < 3000){$tikets += 2;}
                elseif($each->price < 5000){$tikets += 3;}
                elseif(777777 > $each->price && $each->price >= 5000){$tikets += 5;}
                elseif($each->price == 777777){$tikets += 2;}
            }
            $notebook = DB::table('listing')
                            ->select('id', 'userid', 'family', 'sn', 'mtm', 'price')
                            ->where('userid', Auth::user()->userid)
                            ->where('category', 'notebook')
                            ->where('hidden', 0)
                            ->get();
            
            $pc = DB::table('listing')
                            ->select('id', 'userid', 'sn', 'mtm', 'price')
                            ->where('userid', Auth::user()->userid)
                            ->where('category', 'pc')
                            ->where('hidden', 0)
                            ->get();

            $monitor = DB::table('listing')
                            ->select('id', 'userid', 'sn', 'mtm', 'price')
                            ->where('userid', Auth::user()->userid)
                            ->where('category', 'monitor')
                            ->where('hidden', 0)
                            ->get();
            
            $tablet = DB::table('listing')
                            ->select('id', 'userid', 'sn', 'mtm', 'price')
                            ->where('userid', Auth::user()->userid)
                            ->where('category', 'tablet')
                            ->where('hidden', 0)
                            ->get();

            $accessory = DB::table('listing')
                            ->select('id', 'userid', 'type', 'mtm', 'price')
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

            return view('list', ['tickets'=>$tikets, 'notebook'=>$notebook, 'pc'=>$pc, 'monitor'=>$monitor, 'tablet'=>$tablet, 'accessory'=>$accessory, 'service'=>$service]);
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