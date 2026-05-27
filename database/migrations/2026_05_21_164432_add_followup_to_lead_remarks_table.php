<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('lead_remarks', function (Blueprint $table) {

            $table->date('followup_date')->nullable();

            $table->time('followup_time')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('lead_remarks', function (Blueprint $table) {

            $table->dropColumn('followup_date');

            $table->dropColumn('followup_time');

        });
    }
};