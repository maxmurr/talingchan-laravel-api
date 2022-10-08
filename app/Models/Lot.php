<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;

    public function invoiceDetails() {
        return $this->hasMany(InvoiceDetail::class);
    }

    public function unit() {
        return $this->belongsTo(Unit::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
