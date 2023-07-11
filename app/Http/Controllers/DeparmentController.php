<?php

namespace App\Http\Controllers;

use App\Interfaces\DepartmentServiceInterface;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = DB::table('departments')->get();

        return response()->json($departments);
    }
}