<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'invoices_id' => $this->invoices_id,
            'lots_id' =>$this->lots_id,
            'units_id' =>$this->units_id,
            'qty' => $this->qty,
            'price' => $this->price
        ];
    }
}
