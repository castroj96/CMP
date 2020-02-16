<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\personalData;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {
        $provinces = DB::table('provinces')->get();
        return view('home', compact('provinces'));
    }

    /**
     * Load the canton dropdown menu
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    protected function loadCanton(Request $request)
    {
        $cantons = DB::table('cantons')->where('prov', $request->province)->pluck('name', 'id');
        return response()->json($cantons);
    }

    /**
     * Load the district dropdown menu
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    protected function loadDistrict(Request $request)
    {
        $districts = DB::table('districts')->where('canton', $request->canton)->pluck('name', 'id');
        return response()->json($districts);
    }

    protected function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'province' => 'required|gte:1|lte:7',
            'canton' => 'required|gte:1|lte:82',
            'district' => 'required|gte:1|lte:484',
            'address1' => 'required|string|max:190|min:10',
            'phoneNumber' => 'required|digits:8'
        ]);

        if (!$validator->passes())
        {
            return response()->json(['error'=>$validator->errors()->all()]);
        }

        $province = $request->province;
        $canton = $request->canton;
        $district = $request->district;
        $address = $request->address1;
        $phoneNumber = $request->phoneNumber;
        $rowData = null;

        $row = DB::table('personaldata')->where('userId',Auth::Id())->pluck('id');

        $dataToStore = array("userId" => Auth::Id(), "provinceId" => $province,
            "cantonId" => $canton, "districtId" => $district,
            "address" => $address, "phoneNumber" => $phoneNumber);

        if ($row->isEmpty()){
            DB::table('personaldata')->insert($dataToStore);
            $rowData = DB::table('personaldata')->where('userId',Auth::Id())->get('id');
        }
        else
        {
            DB::table('personaldata')->where('id',$row)->update($dataToStore);
            $rowData = DB::table('personaldata')->where('userId',Auth::Id())->get('id');
        }

        if($rowData->isNotEmpty())
            return response()->json(['success'=> 'Data saved']);
        else
            return response()->json(['error'=> 'Data could not be saved']);
    }

}
