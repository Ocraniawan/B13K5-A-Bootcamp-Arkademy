<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->Increments('id')->unsigned();
            $table->string('name', 5);
            $table->timestamps();
        });

        Schema::table('product', function (Blueprint $table){
            $table->foreign('id_category')
                    ->references('id')->on('product')
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
            $table->dropForeign('product_id_category_foreign');
        });
        
        Schema::dropIfExists('category');
    }
}
