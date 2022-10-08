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
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());
    }
}
