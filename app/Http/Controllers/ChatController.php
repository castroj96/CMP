<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\commonData;

class ChatController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(Request $request)
    {
        $roomName = "null";

        switch ($request->id)
        {
            case commonData::ACT_CULTO_MARTES:
                $roomName = commonData::ROOM_CULTO_MARTES;
                break;
            case commonData::ACT_AYUNO_MIERCOLES:
                $roomName = commonData::ROOM_AYUNO_MIERCOLES;
                break;
            case commonData::ACT_CULTO_JUEVES:
                $roomName = commonData::ROOM_CULTO_JUEVES;
                break;
            case commonData::ACT_REFUGIO_JOVENES:
                $roomName = commonData::ROOM_REFUGIO_JOVENES;
                break;
            case commonData::GEDEON_SANDIEGO_1:
                $roomName = commonData::ROOM_GED_SANDIEGO_1;
                break;
            case commonData::GEDEON_SANDIEGO_2:
                $roomName = commonData::ROOM_GED_SANDIEGO_2;
                break;
            case commonData::GEDEON_SANDIEGO_3:
                $roomName = commonData::ROOM_GED_SANDIEGO_3;
                break;
            case commonData::GEDEON_SANRAFAEL_1:
                $roomName = commonData::ROOM_GED_SANRAFAEL_1;
                break;
            case commonData::GEDEON_SANRAFAEL_2:
                $roomName = commonData::ROOM_GED_SANRAFAEL_2;
                break;
            case commonData::GEDEON_TRESRIOS_1:
                $roomName = commonData::ROOM_GED_TRESRIOS_1;
                break;
            case commonData::GEDEON_TRESRIOS_2:
                $roomName = commonData::ROOM_GED_TRESRIOS_2;
                break;
            case commonData::GEDEON_TRESRIOS_3:
                $roomName = commonData::ROOM_GED_MVD;
                break;
            case commonData::GEDEON_TRESRIOS_4:
                $roomName = commonData::ROOM_GED_TRESRIOS_4;
                break;
            case commonData::GEDEON_TRESRIOS_5:
                $roomName = commonData::ROOM_GED_TRESRIOS_5;
                break;
            case commonData::GEDEON_CONCEPCION_1:
                $roomName = commonData::ROOM_GED_CONCEPCION_1;
                break;
            case commonData::GEDEON_CONCEPCION_2:
                $roomName = commonData::ROOM_GED_CONCEPCION_2;
                break;
            case commonData::GEDEON_CONCEPCION_3:
                $roomName = commonData::ROOM_GED_CONCEPCION_3;
                break;
            case commonData::GEDEON_DULCENOMBRE_1:
                $roomName = commonData::ROOM_GED_DULCENOMBRE_1;
                break;
            case commonData::GEDEON_SANJUAN_1:
                $roomName = commonData::ROOM_GED_SANJUAN_1;
                break;
            case commonData::GEDEON_CARTAGO_1:
                $roomName = commonData::ROOM_GED_CARTAGO_1;
                break;
            default:
                return redirect('/');
        }

        return view('chat')->with('roomName', $roomName);
    }
}
