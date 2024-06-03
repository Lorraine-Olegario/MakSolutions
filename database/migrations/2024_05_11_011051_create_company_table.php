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
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('cnpj',18);
            $table->text('fantasy_name');
            $table->text('social_reason');
            $table->text('cep');
            $table->text('street');//logradouro
            $table->text('number');
            $table->text('complement')->nullable();
            $table->text('neighborhood');//bairro
            $table->text('municipality');
            $table->text('uf');
            $table->text('email_1');
            $table->text('email_2')->nullable();
            $table->text('telephone_1');
            $table->text('telephone_2')->nullable();
            $table->text('instagram')->nullable();
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('logo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
