<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;
use App\Skill;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $salmin = $request->salmin;
        $salmax = $request->salmax;

        $employees = Employee::with(['skills' => function($q){ $q->select('skill','employee_id'); }])
                             ->where(DB::raw('cast( REPLACE(REPLACE(salary,\'$\',\'\'),\',\',\'\') as decimal(30,5))') , '>=' , $salmin)
                             ->where(DB::raw('cast( REPLACE(REPLACE(salary,\'$\',\'\'),\',\',\'\') as decimal(30,5))') , '<=' , $salmax)->get();

        return $employees;
    }

}
