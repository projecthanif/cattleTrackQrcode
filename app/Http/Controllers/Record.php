<?php

namespace App\Http\Controllers;

use App\Models\Cattle;
use App\Models\CattleHealthRecord;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Record extends Controller
{
    public function index($id)
    {
        $cattle = Cattle::where([
            'id' => $id
        ])->get()->first();

        $farmer = User::where([
            'id' => $cattle->farmer_id
        ])->get('name')->first()->name;
        $dob = Carbon::parse($cattle->dob)->toDateString();
        $immunization_date = Carbon::parse($cattle->immunization_date)->toDateString();

        $table = CattleHealthRecord::where([
            'cattle_id' => $cattle->id,
        ])->get();


        return view('record',
            compact('cattle', 'farmer', 'dob', 'table', 'immunization_date')
        );
    }
}
