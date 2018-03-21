<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_coins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fee')->nullable();
            $table->string('billedTotal')->nullable();
            $table->string('txHash')->nullable();   // transaction Hash
            $table->unsignedInteger('retailer_id')->nullable();
            $table->unsignedInteger('supplier_id')->nullable();
            $table->integer('items_count')->unsinged()->nullable();
            $table->integer('buy_token')->unsinged()->nullable();

            $table->timestamps();
        });

        Schema::table('purchase_coins', function (Blueprint $table) {
            // $table->foreign('retailer_id')
            //       ->references('id')->on('retailers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_coins');
    }
}
