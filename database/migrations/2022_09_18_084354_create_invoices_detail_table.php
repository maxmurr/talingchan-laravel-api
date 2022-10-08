<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices_detail', function (Blueprint $table) {
            $table->foreignId('invoices_id')->constrained();
            $table->foreignId('lots_id')->constrained();
            $table->double('qty', 5);
            $table->char('price', 6);
            $table->foreignId('units_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices_detail');
    }
};
