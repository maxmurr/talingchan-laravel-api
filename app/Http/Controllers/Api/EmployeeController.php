<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Resources\EmployeeCollection;
use App\Http\Resources\EmployeeResource;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        return new EmployeeCollection(Employee::paginate());
    }

    public function show(Employee $employee)
    {
        return new EmployeeResource($employee);
    }

    public function store(StoreEmployeeRequest $request)
    {
        return new EmployeeResource(Employee::create($request->all()));
        if ($employee->save()) {
            return response()->json([
                'success' => true,
                'message' => 'Employee saved successfully',
                'employees_id' => $employee->id
            ], Response::HTTP_CREATED);
        }
        return response()->json([
            'success' => false,
            'message' => 'Employee saved failed'
        ], Response::HTTP_BAD_REQUEST);
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());
        if ($employee->save()) {
            return response()->json([
                'success' => true,
                'message' => 'Employee updated successfully',
                'employees_id' => $employee->id
            ], Response::HTTP_OK);
        }
        return response()->json([
            'success' => false,
            'message' => 'Employee updated failed'
        ], Response::HTTP_BAD_REQUEST);
    }

    public function destroy(Employee $employee)
    {
        $name = $employee->name;
        if ($employee->delete()) {
            return response()->json([
                'success' => true,
                'message' => "Employee {$employee} deleted successfully"
            ], Response::HTTP_OK);
        }
        return response()->json([
            'success' => false,
            'message' => "Employee {$employee} deleted failed"
        ], Response::HTTP_BAD_REQUEST);
    }
}
