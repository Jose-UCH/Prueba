<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Skill;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Storage::disk('public')->exists('employees.json')){

            $temp = Storage::get('public/employees.json');

            $contents = json_decode($temp);

            foreach ($contents as $key => $value) {

                $data = new Employee();

                $data = [
                    'id'      => $value->id,
                    'isOnline'=> $value->isOnline,
                    'salary'  => $value->salary,
                    'age'     => $value->age,
                    'position'=> $value->position,
                    'name'    => $value->name,
                    'gender'  => $value->gender,
                    'email'   => $value->email,
                    'phone'   => $value->phone,
                    'address' => $value->address,
                ];

                Employee::create($data);

                foreach ($value->skills as $key => $val) {

                    $data_skill = [
                        'skill'       => $val->skill,
                        'employee_id' => $value->id,
                    ];

                    Skill::create($data_skill);
                }
            }

            $ruta = storage_path('app/public/employees.json');
            unlink($ruta);
        }

        $request->session()->put('search', $request
                ->has('search') ? $request->get('search') : ($request->session()
                ->has('search') ? $request->session()->get('search') : ''));

        $employees = new Employee();

        $employees = $employees->where('email', 'like', '%' . $request->session()->get('search') . '%')->orderBy('name')->paginate(10);

        if ($request->ajax()) {
          return view('employee.index', compact('employees'));
        } else {
          return view('employee.ajax', compact('employees'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->isMethod('get'))
            return view('employee.form');

        $rules = [
          'id'   => 'required',
          'name' => 'required',
          'email'=> 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
            return response()->json([
              'fail'  =>true,
              'errors'=> $validator->errors()
            ]);

        $employee = new Employee();
        $employee->id      = $request->id;
        $employee->name    = $request->name;
        $employee->email   = $request->email;
        $employee->address = $request->address;
        $employee->phone   = $request->phone;
        $employee->age     = $request->age;
        $employee->gender  = $request->gender;
        $employee->position= $request->position;
        $employee->salary   = $request->salary;
        $employee->isOnline= $request->isOnline;
        $employee->save();

        return response()->json([
          'fail'        => false,
          'redirect_url'=> url('employees')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if($request->isMethod('get')) {
            return view('employee.detail',['employee' => Employee::with('skills')->find($id)]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
