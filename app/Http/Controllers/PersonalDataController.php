<?php

namespace App\Http\Controllers;

use App\Canton;
use App\District;
use App\Province;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\personalData;

class PersonalDataController extends Controller
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
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {
        $provinces = Province::all();
        return view('personalData', compact('provinces'));
    }

    /**
     * Load the canton dropdown menu.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    protected function loadCanton(Request $request)
    {
        $cantons = Canton::getCantonsByProvince($request->province);
        return response()->json($cantons);
    }

    /**
     * Load the district dropdown menu.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    protected function loadDistrict(Request $request)
    {
        $districts = District::getDistrictsbyCanton($request->canton);
        return response()->json($districts);
    }

    /**
     * Create or update the personal data of a user in the database.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
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
            return response()->json(['error'=>$validator->errors()->all()]);

        $result = PersonalData::SaveOrUpdateUserData($request, Auth::Id());

        if($result > 0)
            return response()->json(['success'=> 'Data saved']);
        else
            return response()->json(['error'=> 'Data could not be saved']);
    }
}
