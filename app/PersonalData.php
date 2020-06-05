<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model
{
    //
    protected $table = 'personalData';
    protected $primaryKey = 'id';
    protected $guarded = ['id', 'userId'];
    protected $fillable = ['provinceId', 'cantonId', 'districtId', 'address', 'phoneNumber'];

    /**
     * Save or updated the personal data of a user in the database.
     * @param $request
     * @param $userId
     * @return mixed the row id of the user created or updated
     */
    public static function SaveOrUpdateUserData($request, $userId)
    {
        $rowId = PersonalData::where('userId', $userId)->pluck('id');

        if ($rowId->isEmpty())
        {
            $personalData = new PersonalData();
            $personalData->userId = $userId;
        }
        else
            $personalData = PersonalData::find($rowId)->first();

        $personalData->provinceId = $request->province;
        $personalData->cantonId = $request->canton;
        $personalData->districtId = $request->district;
        $personalData->address = $request->address1;
        $personalData->phoneNumber = $request->phoneNumber;
        $personalData->updated_at = time();
        $personalData->save();

        return $personalData->id;
    }
}
