<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PatientSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientScheduleController extends Controller
{
    public function index(Request $request)
    {
        $patientSchedules = DB::table('patient_schedules')
            ->when($request->input('patient_id'), function ($query, $name) {
                return $query->where('patient_id', 'like', '%' . $name . '%');
            })
            ->orderBy('id', 'desc')
            ->get();

        return $this->successResponse($patientSchedules, 'Patient Schedule retrieved successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'schedule_time' => 'required',
            'complaint' => 'required',
            'status' => 'required',
        ]);

        $patientSchedule = PatientSchedule::create([
            'patient_id' => $request->patient_id,
            'doctor_id' => $request->doctor_id,
            'schedule_time' => $request->schedule_time,
            'complaint' => $request->complaint,
            'status' => 'waiting',
            'no_antrian' => 1,

        ]);

        return $this->successResponse($patientSchedule, 'Patient Schedule created successfully.', 201);
    }
}
