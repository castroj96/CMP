<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $provinces = DB::table('provinces')->get();
        return view('home', compact('provinces'));
    }

    protected function save(Request $request)
    {
        $data = $request->all();

        $validData = Validator::make($request->all(), [
            'province' => 'gte:1|lte:7',
            'canton' => 'required|string|max:45',
            'district' => 'required|string|max:45',
            'address1' => 'required|string|max:255',
        ]);

        if ($validData->fails())
        {
            return redirect('/home')->withErrors($validData)->withInput();
        }

        return $request->all();
    }
}
