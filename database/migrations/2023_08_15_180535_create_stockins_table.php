<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stockins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stockInProduct', 200);
            $table->string('stockInQuantity', 200);
            $table->string('stockInInvoice', 200);
            $table->string('stockInStockToday', 200);
            $table->string('stockInLocal', 200);
            $table->string('stockInLocalZone', 200);
            $table->string('stockInLocalZoneNumber', 200);
            $table->string('stockInProvider', 200);
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stockins');
    }
};
