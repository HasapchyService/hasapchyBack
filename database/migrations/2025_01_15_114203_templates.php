<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('cash_register_id')->constrained('cash_registers')->onDelete('cascade');
            $table->decimal('amount', 15, 2)->nullable();
            $table->boolean('type')->nullable(); // 0 for expense, 1 for income
            $table->date('transaction_date')->nullable();
            $table->text('note')->nullable();
            $table->foreignId('currency_id')->nullable()->constrained('currencies')->onDelete('set null');
            $table->foreignId('category_id')->nullable()->constrained('transaction_categories')->onDelete('set null');
            $table->foreignId('client_id')->nullable()->constrained('clients')->onDelete('set null');
            $table->foreignId('project_id')->nullable()->constrained('projects')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        
        Schema::dropIfExists('templates');
    }
};
