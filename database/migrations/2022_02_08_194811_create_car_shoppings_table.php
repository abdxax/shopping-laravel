<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarShoppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_shoppings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("oder_id");
            $table->unsignedBigInteger("prod_id");
            $table->integer("count");
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("oder_id")->references("id")->on("orders")->onDelete("cascade");
            $table->foreign("prod_id")->references("id")->on("proudcts")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_shoppings');
    }
}
