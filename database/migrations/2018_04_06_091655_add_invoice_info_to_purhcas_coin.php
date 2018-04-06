<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInvoiceInfoToPurhcasCoin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('purchase_coins', function (Blueprint $table) {
            $table->string('invoice_file')->nullable();
            $table->string('invoice_no')->nullable();
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchase_coins', function (Blueprint $table) {
            $table->dropColumn('invoice_file');
            $table->dropColumn('invoice_no');
        });        
    }
}
