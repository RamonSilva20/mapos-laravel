<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->string('document_number', 191);
            $table->string('phone_number', 191);
            $table->string('mobile_phone_number', 191);
            $table->string('email', 191);
            $table->string('postal_code', 191);
            $table->string('street_number', 191);
            $table->string('street_name', 191);
            $table->string('neighborhood', 191);
            $table->string('city', 191);
            $table->string('state', 191);
            $table->string('complement', 191)->nullable();
            $table->string('contact', 191)->nullable();
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
        Schema::dropIfExists('customers');
    }
}
