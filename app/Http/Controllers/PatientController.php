<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request)
    {

        $patients = Patient::when($request->input('nik'), function ($query, $nik) {
            return $query->where('nik', 'like', '%' . $nik . '%');
        })->paginate(10);
        return view('pages.patients.index', compact('patients'));
    }
}
