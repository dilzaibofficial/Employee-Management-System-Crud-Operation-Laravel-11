<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    

    // Show all employees
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    // Show form to create a new employee
    public function create()
    {
        return view('employees.create');
    }

    // Store a new employee
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees',
            'position' => 'required',
            'salary' => 'required|numeric',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index');
    }

    // Show the form to edit an employee
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    // Update an employee's details
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'position' => 'required',
            'salary' => 'required|numeric',
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index');
    }

    // Delete an employee
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }
}


