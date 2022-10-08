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

}
