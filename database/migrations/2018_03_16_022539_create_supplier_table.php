<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('logo_file')->nullable();
            $table->string('street_address')->nullable();
            $table->string('street_code')->nullable();
            $table->string('province')->nullable();
            $table->string('postal_address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('company_registration_no')->nullable();            
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
        Schema::dropIfExists('suppliers');
    }
}
