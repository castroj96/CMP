<?php

namespace App\Http\Controllers;

use App\commonData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $userData = DB::table('users')
            ->join('genders', 'genders.id', 'users.gender')
            ->join('personaldata', 'users.id', 'personaldata.userId')
            ->join('provinces', 'provinces.id', 'personaldata.provinceId')
            ->join('cantons', 'cantons.id','personaldata.cantonId')
            ->join('districts', 'districts.id','personaldata.districtId')
            ->select('users.id as id', 'users.name as name', 'users.lastName as lName1', 'users.motherLastName as lName2',
                    'users.dateBirth as bDate', 'genders.description as gender', 'users.email as email',
                    'personaldata.phoneNumber as phone', 'provinces.name as province', 'cantons.name as canton',
                    'districts.name as district', 'personaldata.address as address')->get();

        $pendingData = DB::table('users')
            ->join('genders', 'genders.id', 'users.gender')
            ->leftJoin('personaldata', 'users.id', 'personaldata.userId')
            ->whereNull('personaldata.userId')
            ->select('users.id as id', 'users.name as name', 'users.lastName as lName1', 'users.motherLastName as lName2',
                'users.dateBirth as bDate', 'genders.description as gender', 'users.email as email')->get();

        if (Auth::user()->isMember == commonData::ADMIN_CODE)
            return view('dashboard', compact('userData', 'pendingData'));
        else {
            return redirect('/');
        }
    }
}
