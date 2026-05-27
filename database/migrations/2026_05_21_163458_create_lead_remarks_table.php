<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lead_remarks', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('lead_id');

            $table->unsignedBigInteger('user_id');

            $table->string('remark_type');

            $table->text('remark')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lead_remarks');
    }
};