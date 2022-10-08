<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    public function invoiceDetails() {
        return $this->hasMany(InvoiceDetail::class);
    }

    public function Lots() {
        return $this->hasMany(Lot::class);
    }
}
