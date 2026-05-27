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
        Schema::table('leads', function (Blueprint $table) {

            $table->string('courier_name')->nullable();

            $table->string('tracking_id')->nullable();

            $table->string('awb_number')->nullable();

            $table->string('shipping_status')->nullable();

            $table->timestamp('dispatch_date')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {

            $table->dropColumn([
                'courier_name',
                'tracking_id',
                'awb_number',
                'shipping_status',
                'dispatch_date'
            ]);

        });
    }
};