<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;

    public function invoice() {
        return $this->belongsTo(Invoice::class);
    }

    public function unit() {
        return $this->belongsTo(Unit::class);
    }

    public function lot() {
        return $this->belongsTo(Lot::class);
    }
}
