<?php


namespace App\Http\Controllers;


use App\Models\Employee;
use http\Env\Request;

class EmployeeController
{
    public function index(){
        $employee = Employee::all()->sortBy('surname');
        return view('employee.index',compact('employee'));
    }


    public function edit($id){
        $employee = Employee::findOrFail($id);
        return view('employee.edit',compact('employee'));
    }

    public function store(Request $request){
        $employee = new Employee();
        $employee->name = $request->get('name');
        $employee->surname = $request->get('surname');
        $employee->is_hired = $request->get('is_hired');

        $employee->save();
        return redirect()->back();
    }
    public function update(Request $request, $id){

        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return redirect()-back();

    }


}
