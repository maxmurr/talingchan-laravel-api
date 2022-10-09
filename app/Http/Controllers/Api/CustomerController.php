<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Customer;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\CustomerCollection;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    public function index()
    {
        return new CustomerCollection(Customer::paginate());
    }


    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }


    public function store(StoreCustomerRequest $request)
    {
        return new CustomerResource(Customer::create($request->all()));
        if ($customer->save()) {
            return response()->json([
                'success' => true,
                'message' => 'Customer saved successfully',
                'customers_id' => $customer->id
            ], Response::HTTP_CREATED);
        }
        return response()->json([
            'success' => false,
            'message' => 'Customer saved failed'
        ], Response::HTTP_BAD_REQUEST);
    }


    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());
        if ($customer->save()) {
            return response()->json([
                'success' => true,
                'message' => 'Customer updated successfully',
                'customers_id' => $customer->id
            ], Response::HTTP_OK);
        }
        return response()->json([
            'success' => false,
            'message' => 'Customer updated failed'
        ], Response::HTTP_BAD_REQUEST);
    }


    public function destroy(Customer $customer)
    {
        $name = $customer->name;
        if ($customer->delete()) {
            return response()->json([
                'success' => true,
                'message' => "Customer {$name} deleted successfully"
            ], Response::HTTP_OK);
        }
        return response()->json([
            'success' => false,
            'message' => "Customer {$name} deleted failed"
        ], Response::HTTP_BAD_REQUEST);
    }

}
