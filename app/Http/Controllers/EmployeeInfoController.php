<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;

class EmployeeInfoController extends Controller
{
    public function index()
    {
        $employee = Auth::user();

        return view('employee_info.index', compact('employee'));
    }

    public function edit()
    {
        $employee = Auth::user();

        return view('employee_info.edit', compact('employee'));
    }

    public function update(Request $request)
    {
        $employee = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $employee->update($request->all());

        return redirect()->route('employee.info')->with('success', 'Employee information updated successfully!');
    }

    public function processForm(Request $request)
    {
        $request->validate([
            'new_field' => 'required|string|max:255',
        ]);

        $employee = Auth::user();
        $employee->update([
            'new_field' => $request->input('new_field'),
        ]);
		
        return redirect()->route('employee.info.edit')->with('success', 'Information updated successfully!');
    }
}
