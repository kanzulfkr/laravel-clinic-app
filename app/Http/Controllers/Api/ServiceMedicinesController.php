<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceMedicinesController extends Controller
{
    public function index(Request $request)
    {
        $serviceMedicines = \App\Models\ServiceMedicines::when($request->input('name'), function ($query, $name) {
            return $query->where('name', 'like', '%' . $name . '%');
        })
            ->orderBy('id', 'desc')
            ->get();

        return $this->successResponse($serviceMedicines, 'Service Medicines retrieved successfully.');
    }
}
