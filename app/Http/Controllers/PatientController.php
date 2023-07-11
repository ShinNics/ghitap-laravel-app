<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        $per_page = $request->input('per_page') ?? 10;
        $attributes = $request->except(['per_page', 'page']);

        $patients = DB::table('patients')
            ->where($attributes)
            ->paginate($per_page);

        return response()->json($patients);
    }
}