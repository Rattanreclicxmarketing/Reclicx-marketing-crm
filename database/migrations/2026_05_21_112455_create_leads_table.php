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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

$table->string('customer_name');
$table->string('phone');
$table->text('address')->nullable();

$table->string('city')->nullable();

$table->string('state')->nullable();

$table->string('pincode')->nullable();
$table->string('email')->nullable();

$table->string('product')->nullable();
$table->decimal('amount',10,2)->nullable();

$table->enum('status',[
    'new_lead',
    'assigned_to_tl',
    'assigned_to_agent',
    'interested',
    'verified',
    'awb_generated',
    'dispatched',
    'delivered'
])->default('new_lead');

$table->unsignedBigInteger('team_leader_id')->nullable();
$table->unsignedBigInteger('agent_id')->nullable();

$table->text('remarks')->nullable();

$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
