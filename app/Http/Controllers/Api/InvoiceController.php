<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\InvoiceCollection;
use App\Http\Resources\InvoiceResource;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        return new InvoiceCollection(Invoice::paginate());
    }

    public function show(Invoice $invoice)
    {
        return new InvoiceResource($invoice);
    }

    public function destroy(Invoice $invoice)
    {
        $id = $invoice->id;
        if ($employee->delete()) {
            return response()->json([
                'success' => true,
                'message' => "Invoice {$id} deleted successfully"
            ], Response::HTTP_OK);
        }
        return response()->json([
            'success' => false,
            'message' => "Invoice {$id} deleted failed"
        ], Response::HTTP_BAD_REQUEST);
    }

}
