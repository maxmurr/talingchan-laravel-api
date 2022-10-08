<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\InvoiceDetailCollection;
use App\Http\Resources\InvoiceDetailResource;
use App\Models\InvoiceDetail;

class InvoiceDetailController extends Controller
{
    public function index()
    {
        return new InvoiceDetailCollection(InvoiceDetail::paginate());
    }

    public function show(InvoiceDetail $invoice_detail)
    {
        return new InvoiceDetailResource($invoice_detail);
    }
}
