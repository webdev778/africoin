<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToPurchaseCoins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('purchase_coins', function (Blueprint $table) {
            $table->foreign('retailer_id')
                  ->references('id')->on('retailers');

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
            $table->dropColumn(['retailer_id']);
        });
    }
}
