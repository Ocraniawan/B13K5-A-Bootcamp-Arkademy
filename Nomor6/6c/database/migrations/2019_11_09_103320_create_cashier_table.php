<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashier', function (Blueprint $table) {
            $table->Increments('id')->unsigned();
            $table->string('name', 20);
            $table->timestamps();
        });

        Schema::table('product', function (Blueprint $table){
            $table->foreign('id_cashier')
                    ->references('id')->on('cashier')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
        $table->dropForeign('product_id_cashier_foreign');
        });

        Schema::dropIfExists('cashier');
    }
}
